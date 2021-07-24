<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Morador;
use App\Models\Vaga;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    private $repositoryVeiculo;
    public function __construct( Veiculo $veiculo)
    {
        $this->repositoryVeiculo = $veiculo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = $this->repositoryVeiculo->with(['vaga'])->paginate();

        return view('pages.admin.veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vagas = Vaga::all();
        $moradores = Morador::all();
        return view('pages.admin.veiculos.create', compact('vagas', 'moradores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryVeiculo->create($request->all());

        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$veiculo = $this->repositoryVeiculo->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.veiculos.show',compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$veiculo = $this->repositoryVeiculo->find($id))
        {
            return redirect()->back();
        }
        $vagas = Vaga::all();
        $moradores = Morador::all();
        return view('pages.admin.veiculos.edit',compact('veiculo', 'vagas', 'moradores'));
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
        if(!$veiculo = $this->repositoryVeiculo->find($id))
        {
            return redirect()->back();
        }
        $veiculo->update($request->all());

        return redirect()->route('veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$veiculo = $this->repositoryVeiculo->find($id))
        {
            return redirect()->back();
        }
        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}
