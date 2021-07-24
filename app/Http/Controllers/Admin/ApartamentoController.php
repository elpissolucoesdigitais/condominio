<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartamento;
use App\Models\Bloco;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    private $repositoryApartamento;
    public function __construct(Apartamento $apartamento)
    {
        $this->repositoryApartamento = $apartamento;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartamentos = $this->repositoryApartamento->with(['bloco','morador'])->paginate();

        return view('pages.admin.apartamentos.index',compact('apartamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blocos = Bloco::all();
        return view('pages.admin.apartamentos.create', compact('blocos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryApartamento->create($request->all());

        return redirect()->route('apartamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$apartamento = $this->repositoryApartamento->find($id))
        {
            return redirect()->back();
        }
        $consumos = $apartamento->consumos()->get()->all();
        foreach($consumos as $consumo){
            echo $consumo->agua;
        }
        return view('pages.admin.apartamentos.show',compact('apartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$apartamento = $this->repositoryApartamento->find($id))
        {
            return redirect()->back();
        }
        $blocos = Bloco::all();
        return view('pages.admin.apartamentos.edit',compact('apartamento', 'blocos'));
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
        if(!$apartamento = $this->repositoryApartamento->find($id))
        {
            return redirect()->back();
        }
        $apartamento->update($request->all());

        return redirect()->route('apartamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$apartamento = $this->repositoryApartamento->find($id))
        {
            return redirect()->back();
        }
        $apartamento->delete();
        return redirect()->route('apartamentos.index');
    }
}
