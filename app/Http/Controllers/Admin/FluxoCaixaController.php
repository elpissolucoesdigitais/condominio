<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FluxoCaixa;
use Illuminate\Http\Request;

class FluxoCaixaController extends Controller
{
    private $repositoryFluxoCaixa;
    public function __construct(FluxoCaixa $fluxoCaixa)
    {
        $this->repositoryFluxoCaixa = $fluxoCaixa;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fluxoCaixas = $this->repositoryFluxoCaixa->latest()->paginate();

        return view('pages.admin.fluxoCaixas.index',compact('fluxoCaixas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.fluxoCaixas.create');
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
        $this->repositoryFluxoCaixa->create($request->all());

        return redirect()->route('fluxoCaixas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$fluxoCaixa = $this->repositoryFluxoCaixa->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.fluxoCaixas.show',compact('fluxoCaixa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$fluxoCaixa = $this->repositoryFluxoCaixa->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.fluxoCaixas.edit',compact('fluxoCaixa'));
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
        if(!$fluxoCaixa = $this->repositoryFluxoCaixa->find($id))
        {
            return redirect()->back();
        }
        $fluxoCaixa->update($request->all());

        return redirect()->route('fluxoCaixas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$fluxoCaixa = $this->repositoryFluxoCaixa->find($id))
        {
            return redirect()->back();
        }
        $fluxoCaixa->delete();
        return redirect()->route('fluxoCaixas.index');
    }
}
