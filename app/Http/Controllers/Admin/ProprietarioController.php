<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    private $repositoryProprietario;
    public function __construct(Proprietario $proprietario)
    {
        $this->repositoryProprietario = $proprietario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietarios = $this->repositoryProprietario->with([
            'condominios.blocos.vagas.veiculos',
            'condominios.blocos.apartamentos.morador.visitas',
            'condominios.blocos.apartamentos.morador.veiculos.vaga'
            ])->paginate();

        return view('pages.admin.proprietarios.index',compact('proprietarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.proprietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryProprietario->create($request->all());

        return redirect()->route('proprietarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$proprietario = $this->repositoryProprietario->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.proprietarios.show',compact('proprietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$proprietario = $this->repositoryProprietario->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.proprietarios.edit',compact('proprietario'));
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
        if(!$proprietario = $this->repositoryProprietario->find($id))
        {
            return redirect()->back();
        }
        $proprietario->update($request->all());

        return redirect()->route('proprietarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$proprietario = $this->repositoryProprietario->find($id))
        {
            return redirect()->back();
        }
        $proprietario->delete();
        return redirect()->route('proprietarios.index');
    }
}
