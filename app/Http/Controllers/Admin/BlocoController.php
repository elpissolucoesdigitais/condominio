<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bloco;
use App\Models\Condominio;
use App\Models\User;
use Illuminate\Http\Request;

class BlocoController extends Controller
{

    private $repositoryBloco;
    protected $repositoryUser;
    public function __construct( Bloco $bloco, User $user)
    {
        $this->repositoryBloco = $bloco;
        //$this->repositoryUser = $user;
        //$this->middleware(['can:user_read'])->only('index','show');
        //$this->middleware(['permission:user_read|user_edit|user_delete|user_create'])->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocos = $this->repositoryBloco->with([
            'apartamentos.morador.veiculos.vaga',
            'apartamentos.morador.visitas',
            'condominio.proprietario',
            'vagas.veiculos'])->paginate();

        return view('pages.admin.blocos.index',compact('blocos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominios = Condominio::all();
        return view('pages.admin.blocos.create', compact('condominios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryBloco->create($request->all());

        return redirect()->route('blocos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$bloco = $this->repositoryBloco->with(['apartamentos'])->find($id))
        {
            return redirect()->back();
        }

        return view('pages.admin.blocos.show',compact('bloco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$bloco = $this->repositoryBloco->find($id))
        {
            return redirect()->back();
        }

        return view('pages.admin.blocos.edit',compact('bloco'));
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
        if(!$bloco = $this->repositoryBloco->find($id))
        {
            return redirect()->back();
        }
        $bloco->update($request->all());

        return redirect()->route('blocos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$bloco = $this->repositoryBloco->find($id))
        {
            return redirect()->back();
        }
        $bloco->delete();
        return redirect()->route('blocos.index');
    }
}
