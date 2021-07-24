<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartamento;
use App\Models\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    private $repositoryMorador;
    public function __construct(Morador $morador)
    {
        $this->repositoryMorador = $morador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moradores = $this->repositoryMorador->with(['apartamento','visitas','veiculos'])->paginate();

        return view('pages.admin.moradores.index',compact('moradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartamentos = Apartamento::all();
        return view('pages.admin.moradores.create', compact('apartamentos'));
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
        $this->repositoryMorador->create($request->all());

        return redirect()->route('moradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$morador = $this->repositoryMorador->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.moradores.show',compact('morador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$morador = $this->repositoryMorador->find($id))
        {
            return redirect()->back();
        }
        $apartamentos = Apartamento::all();
        return view('pages.admin.moradores.edit',compact('morador'), compact('apartamentos'));
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
        if(!$morador = $this->repositoryMorador->find($id))
        {
            return redirect()->back();
        }
        $morador->update($request->all());

        return redirect()->route('moradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$morador = $this->repositoryMorador->find($id))
        {
            return redirect()->back();
        }
        $morador->delete();
        return redirect()->route('moradores.index');
    }
}
