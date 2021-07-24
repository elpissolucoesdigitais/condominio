<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bloco;
use App\Models\Consumo;
use App\Models\ControlePagamento;
use App\Models\Financeiro;
use App\Models\FluxoCaixa;
use App\Models\Funcionario;
use App\Models\Imposto;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    private $repositoryFinanceiro;
    public function __construct( Financeiro $financeiro)
    {
        $this->repositoryFinanceiro = $financeiro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financeiros = $this->repositoryFinanceiro->latest()->paginate();

        return view('pages.admin.financeiros.index',compact('financeiros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blocos = Bloco::all();
        $fluxoCaixas = FluxoCaixa::all();
        $impostos = Imposto::all();
        $consumos = Consumo::all();
        $funcionarios = Funcionario::all();
        $controlePagamentos = ControlePagamento::all();
        return view('pages.admin.financeiros.create', compact('blocos', 'fluxoCaixas', 'impostos', 'consumos', 'funcionarios', 'controlePagamentos'));
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
        $this->repositoryFinanceiro->create($request->all());

        return redirect()->route('financeiros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$financeiro = $this->repositoryFinanceiro->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.financeiros.show',compact('financeiro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$financeiro = $this->repositoryFinanceiro->find($id))
        {
            return redirect()->back();
        }
        $blocos = Bloco::all();
        $fluxoCaixas = FluxoCaixa::all();
        $impostos = Imposto::all();
        $consumos = Consumo::all();
        $funcionarios = Funcionario::all();
        $controlePagamentos = ControlePagamento::all();
        return view('pages.admin.financeiros.edit',compact('financeiro'), compact('blocos', 'fluxoCaixas', 'impostos', 'consumos', 'funcionarios', 'controlePagamentos'));
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
        if(!$financeiro = $this->repositoryFinanceiro->find($id))
        {
            return redirect()->back();
        }
        $financeiro->update($request->all());

        return redirect()->route('financeiros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$financeiro = $this->repositoryFinanceiro->find($id))
        {
            return redirect()->back();
        }
        $financeiro->delete();
        return redirect()->route('financeiros.index');
    }
}
