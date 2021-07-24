<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SituacaoMorador;
use Illuminate\Http\Request;

class SituacaoMoradorController extends Controller
{

    private $repositorySituacaoMorador;
    
    public function __construct( SituacaoMorador $situacao_morador){
        $this->repositorySituacaoMorador = $situacao_morador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situacao_moradores = $this->repositorySituacaoMorador->latest()->paginate();

        return view('pages.admin.situacao_moradores.index', compact('situacao_moradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.situacao_moradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositorySituacaoMorador->create($request->all());

        return redirect()->route('situacao_moradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$situacao_morador = $this->repositorySituacaoMorador->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.situacao_moradores.show',compact('situacao_morador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$situacao_morador = $this->repositorySituacaoMorador->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.situacao_moradores.edit',compact('situacao_morador'));
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
        if(!$situacao_morador = $this->repositorySituacaoMorador->find($id))
        {
            return redirect()->back();
        }
        $situacao_morador->update($request->all());

        return redirect()->route('situacao_moradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$situacao_morador = $this->repositorySituacaoMorador->find($id))
        {
            return redirect()->back();
        }
        $situacao_morador->delete();
        return redirect()->route('situacao_moradores.index');
    }
}
