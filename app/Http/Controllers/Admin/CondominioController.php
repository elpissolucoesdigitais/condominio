<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Condominio;
use App\Models\Proprietario;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    private $repositoryCondominio;
    public function __construct(Condominio $condominio)
    {
        $this->repositoryCondominio = $condominio;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios = $this->repositoryCondominio
                            ->with(['proprietario',
                                    'blocos.apartamentos.morador.visitas',
                                    'blocos.apartamentos.morador.veiculos.vaga',
                                    'blocos.vagas.veiculos.morador.apartamento',
                                    'reservaItems'])->paginate();


        return view('pages.admin.condominios.index',compact('condominios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietarios = Proprietario::all();
        return view('pages.admin.condominios.create', compact('proprietarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryCondominio->create($request->all());

        return redirect()->route('condominios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$condominio = $this->repositoryCondominio->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.condominios.show',compact('condominio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$condominio = $this->repositoryCondominio->find($id))
        {
            return redirect()->back();
        }
        $proprietarios = Proprietario::all();
        return view('pages.admin.condominios.edit',compact('condominio', 'proprietarios'));
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
        if(!$condominio = $this->repositoryCondominio->find($id))
        {
            return redirect()->back();
        }
        $condominio->update($request->all());

        return redirect()->route('condominios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$condominio = $this->repositoryCondominio->find($id))
        {
            return redirect()->back();
        }
        $condominio->delete();
        return redirect()->route('condominios.index');
    }
}
