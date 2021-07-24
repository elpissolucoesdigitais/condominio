<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Condominio;
use App\Models\Reserva;
use App\Models\ReservaItem;
use Illuminate\Http\Request;

class ReservaItemController extends Controller
{
    private $repositoryReservaItem;

    public function __construct(ReservaItem $reservaItem)
    {
        $this->repositoryReservaItem = $reservaItem;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservaItems = $this->repositoryReservaItem->latest()->paginate();

        return view('pages.admin.reservaItems.index', compact('reservaItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominios = Condominio::all();
        return view('pages.admin.reservaItems.create', compact('condominios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservaItems = new reservaItem();

        $reservaItems->nome = request('nome');
        $reservaItems->identificador_item = request('identificador_item');
        $reservaItems->quantidade = request('quantidade');
        $reservaItems->valor = request('valor');
        $reservaItems->condominio_id = request('condominio_id');
        $reservaItems->save();
        return redirect()->route('reservaItems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$reservaItem = $this->repositoryReservaItem->find($id))
        {
            return redirect()->back();
        }

        return view('pages.admin.reservaItems.show',compact('reservaItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condominios = Condominio::all();
        if(!$reservaItem = $this->repositoryReservaItem->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.reservaItems.edit',compact('reservaItem','condominios'));
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
        if(!$reservaItems = $this->repositoryReservaItem->find($id))
        {
            return redirect()->back();
        }

        $reservaItems->nome = request('nome');
        $reservaItems->identificador_item = request('identificador_item');
        $reservaItems->quantidade = request('quantidade');
        $reservaItems->valor = request('valor');
        $reservaItems->condominio_id = request('condominio_id');

        $reservaItems->update();
        return redirect()->route('reservaItems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$reservaItem = $this->repositoryReservaItem->find($id))
        {
            return redirect()->back();
        }
        $reservaItem->delete();
        return redirect()->route('reservaItems.index');
    }
}
