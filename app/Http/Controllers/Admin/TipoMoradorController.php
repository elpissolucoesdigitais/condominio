<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TipoMorador;
use Illuminate\Http\Request;

class TipoMoradorController extends Controller
{
    private $repositoryTipoMorador;
    public function __construct( TipoMorador $tipo_morador){
        $this->repositoryTipoMorador = $tipo_morador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_moradores = $this->repositoryTipoMorador->latest()->paginate();

        return view('pages.admin.tipo_moradores.index', compact('tipo_moradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tipo_moradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryTipoMorador->create($request->all());

        return redirect()->route('tipo_moradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$tipo_morador = $this->repositoryTipoMorador->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.tipo_moradores.show',compact('tipo_morador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$tipo_morador = $this->repositoryTipoMorador->find($id))
        {
            return redirect()->back();
        }

        return view('pages.admin.tipo_moradores.edit',compact('tipo_morador'));;
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
        if(!$tipo_morador = $this->repositoryTipoMorador->find($id))
        {
            return redirect()->back();
        }
        $tipo_morador->update($request->all());

        return redirect()->route('tipo_moradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$tipo_morador = $this->repositoryTipoMorador->find($id))
        {
            return redirect()->back();
        }
        $tipo_morador->delete();
        return redirect()->route('tipo_moradores.index');
    }
}
