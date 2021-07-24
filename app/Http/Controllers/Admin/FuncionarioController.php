<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    private $repositoryFuncionario;
    public function __construct(Funcionario $funcionario)
    {
        $this->repositoryFuncionario = $funcionario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = $this->repositoryFuncionario->latest()->paginate();

        return view('pages.admin.funcionarios.index',compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryFuncionario->create($request->all());

        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$funcionario = $this->repositoryFuncionario->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.funcionarios.show',compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$funcionario = $this->repositoryFuncionario->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.funcionarios.edit',compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$funcionario = $this->repositoryFuncionario->find($id))
        {
            return redirect()->back();
        }
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$funcionario = $this->repositoryFuncionario->find($id))
        {
            return redirect()->back();
        }
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
