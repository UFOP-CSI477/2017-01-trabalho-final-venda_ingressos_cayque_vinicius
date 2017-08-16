<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filme;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::orderBy('nome','asc')->get();
        return view('filmes.index')->with('filmes',$filmes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect('/filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filmes = Filme::find($id);
        return view('filmes.show')->with('filmes',$filmes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filmes = Filme::find($id);
        return view('filmes.edit')->with('filmes',$filmes);
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
        $filmes = Filme::find($id);
        $filmes->nome = $request->nome;
        $filmes->genero = $request->genero;
        $filmes->duracao = $request->duracao;
        $filmes->sinopse = $request->sinopse;
        $filmes->elenco = $request->elenco;
        $filmes->diretor = $request->diretor;
        $filmes->classificacao = $request->classificacao;
        $filmes->capa = $request->capa;
        $filmes->trailer = $request->trailer;
        $filmes->save();
        return redirect('/filmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filmes = Filme::find($id);
        $filmes->delete();
        return redirect('/filmes');
    }
}
