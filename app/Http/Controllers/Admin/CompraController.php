<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    private $repositoryCompra;
    public function __construct(Compra $compra)
    {
        $this->repositoryCompra = $compra;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = $this->repositoryCompra->latest()->paginate();
        
        return view('pages.admin.compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compras = new Compra();

        $compras->titulo = request('titulo');
        $compras->produto = request('produto');
        $compras->observacao = request('observacao');
        $compras->quantidade = request('quantidade');
        $compras->valor = request('valor');
        $compras->valor_total = request('valor')*request('quantidade');
        $compras->save();
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$compra = $this->repositoryCompra->find($id))
        {
            return redirect()->back();
        }

        return view('pages.admin.compras.show',compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$compra = $this->repositoryCompra->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.compras.edit',compact('compra'));
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
        if(!$compras = $this->repositoryCompra->find($id))
        {
            return redirect()->back();
        }

        $compras->titulo = request('titulo');
        $compras->produto = request('produto');
        $compras->observacao = request('observacao');
        $compras->quantidade = request('quantidade');
        $compras->valor = request('valor');
        $compras->valor_total = request('valor')*request('quantidade');
        $compras->update();
        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$compra = $this->repositoryCompra->find($id))
        {
            return redirect()->back();
        }
        $compra->delete();
        return redirect()->route('compras.index');
    }
}
