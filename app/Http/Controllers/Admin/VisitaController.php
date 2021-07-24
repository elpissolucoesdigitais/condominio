<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartamento;
use App\Models\Morador;
use App\Models\Visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    private $repositoryVisita;
    public function __construct(Visita $visita)
    {
        $this->repositoryVisita = $visita;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitas = $this->repositoryVisita->with(['morador','morador'])->paginate();

        return view('pages.admin.visitas.index',compact('visitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $moradores = Morador::all();
        return view('pages.admin.visitas.create', compact('moradores'));
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
        $this->repositoryVisita->create($request->all());

        return redirect()->route('visitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$visita = $this->repositoryVisita->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.visitas.show',compact('visita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$visita = $this->repositoryVisita->find($id))
        {
            return redirect()->back();
        }
        $moradores = Morador::all();
        return view('pages.admin.visitas.edit',compact('visita','moradores'));
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
        if(!$visita = $this->repositoryVisita->find($id))
        {
            return redirect()->back();
        }
        $visita->update($request->all());

        return redirect()->route('visitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$visita = $this->repositoryVisita->find($id))
        {
            return redirect()->back();
        }
        $visita->delete();
        return redirect()->route('visitas.index');
    }
}
