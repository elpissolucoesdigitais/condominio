<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ControlePagamento;
use Illuminate\Http\Request;

class ControlePagamentoController extends Controller
{
    private $repositoryControlePagamento;
    public function __construct(ControlePagamento $controlePagamento)
    {
        $this->repositoryControlePagamento = $controlePagamento;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controlePagamentos = $this->repositoryControlePagamento->latest()->paginate();

        return view('pages.admin.controlePagamentos.index',compact('controlePagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.controlePagamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryControlePagamento->create($request->all());

        return redirect()->route('controlePagamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$controlePagamento = $this->repositoryControlePagamento->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.controlePagamentos.show',compact('controlePagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$controlePagamento = $this->repositoryControlePagamento->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.controlePagamentos.edit',compact('controlePagamento'));

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
        if(!$controlePagamento = $this->repositoryControlePagamento->find($id))
        {
            return redirect()->back();
        }
        $controlePagamento->update($request->all());

        return redirect()->route('controlePagamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$controlePagamento = $this->repositoryControlePagamento->find($id))
        {
            return redirect()->back();
        }
        $controlePagamento->delete();
        return redirect()->route('controlePagamentos.index');
    }
}
