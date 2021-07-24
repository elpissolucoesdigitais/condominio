<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartamento;
use App\Models\Consumo;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    private $repositoryConsumo;
    public function __construct(Consumo $consumo)
    {
        $this->repositoryConsumo = $consumo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = $this->repositoryConsumo->latest()->paginate();

        $apartamentos = Apartamento::all();

        return view('pages.admin.consumos.index',compact('consumos','apartamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartamentos = Apartamento::all();
        return view('pages.admin.consumos.create', compact('apartamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryConsumo->create($request->all());

        return redirect()->route('consumos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$consumo = $this->repositoryConsumo->find($id))
        {
            return redirect()->back();
        }

        $apartamentos = $consumo->apartamento()->get()->all();

        return view('pages.admin.consumos.show',compact('consumo', 'apartamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$consumo = $this->repositoryConsumo->find($id))
        {
            return redirect()->back();
        }
        $apartamentos = Apartamento::all();
        return view('pages.admin.consumos.edit',compact('consumo', 'apartamentos'));

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
        if(!$consumo = $this->repositoryConsumo->find($id))
        {
            return redirect()->back();
        }
        $consumo->update($request->all());

        return redirect()->route('consumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$consumo = $this->repositoryConsumo->find($id))
        {
            return redirect()->back();
        }
        $consumo->delete();
        return redirect()->route('consumos.index');
    }
}
