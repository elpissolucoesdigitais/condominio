<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Imposto;
use Illuminate\Http\Request;

class ImpostoController extends Controller
{
    private $repositoryImposto;
    public function __construct(Imposto $imposto)
    {
        $this->repositoryImposto = $imposto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impostos = $this->repositoryImposto->latest()->paginate();

        return view('pages.admin.impostos.index',compact('impostos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.impostos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repositoryImposto->create($request->all());

        return redirect()->route('impostos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$imposto = $this->repositoryImposto->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.impostos.show',compact('imposto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$imposto = $this->repositoryImposto->find($id))
        {
            return redirect()->back();
        }
        return view('pages.admin.impostos.edit',compact('imposto'));

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
        if(!$imposto = $this->repositoryImposto->find($id))
        {
            return redirect()->back();
        }
        $imposto->update($request->all());

        return redirect()->route('impostos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$imposto = $this->repositoryImposto->find($id))
        {
            return redirect()->back();
        }
        $imposto->delete();
        return redirect()->route('impostos.index');
    }
}
