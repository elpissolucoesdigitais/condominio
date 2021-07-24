<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bloco;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    private $repositoryVaga;
    public function __construct(Vaga $vaga)
    {
        $this->repositoryVaga = $vaga;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = $this->repositoryVaga->with(['bloco','veiculos'])->paginate();

        return view('pages.admin.vagas.index',compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blocos = Bloco::all();
        return view('pages.admin.vagas.create', compact('blocos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->repositoryVaga->create($request->all());

        return redirect()->route('vagas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$vaga = $this->repositoryVaga->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.vagas.show',compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$vaga = $this->repositoryVaga->find($id))
        {
            return redirect()->back();
        }
        $blocos = Bloco::all();
        return view('pages.admin.vagas.edit',compact('vaga', 'blocos'));
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
        if(!$vaga = $this->repositoryVaga->find($id))
        {
            return redirect()->back();
        }
        $vaga->update($request->all());

        return redirect()->route('vagas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$vaga = $this->repositoryVaga->find($id))
        {
            return redirect()->back();
        }
        $vaga->delete();
        return redirect()->route('vagas.index');
    }
}
