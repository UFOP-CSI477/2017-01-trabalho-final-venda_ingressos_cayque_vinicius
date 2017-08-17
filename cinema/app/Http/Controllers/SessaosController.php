<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sessao;
use App\Filme;

class SessaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessao = Sessao::all();
        $filme = Filme::all();
        return view('sessaos.index')->with('sessao',$sessao)->with('filme',$filme);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('sessaos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sessao::create($request->all());
        return redirect('/sessaos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sessao = Sessao::find($id);
        return view('sessaos.show')->with('sessao',$sessao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sessao = Sessao::find($id);
        return view('sessaos.edit')->with('sessao',$sessao);
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
        $sessao = Sessao::find($id);
        $sessao->filme_id = $request->filme_id;
        $sessao->dublado = $request->dublado;
        $sessao->legendado = $request->legendado;
        $sessao->data = $request->data;
        $sessao->hora = $request->hora;
        $sessao->local = $request->local;
        $sessao->preco = $request->preco;
        $sessao->save();
        return redirect('/sessaos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessao = Sessao::find($id);
        $sessao->delete();
        return redirect('/sessaos');
    }
}
