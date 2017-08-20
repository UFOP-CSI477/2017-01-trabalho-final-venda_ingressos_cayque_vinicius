<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Filme;
use App\Sessao;
use Auth;
Use Redirect;


class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $itens = Carrinho::where('user_id', '=', Auth::user()->id)->get();
      $total = Carrinho::where('user_id', '=', Auth::user()->id)->count();
      return view('areaInicio.carrinho.index')->with('itens', $itens)->with('total', $total);
    }

    public function confirmar(Request $request) {
      //return dd($request->all());
      $dadossessao = Sessao::find($request->sessao_id);
      return view('areaInicio.carrinho.confirmar')->with('dados', $request)->with('dado', $dadossessao);
      //return Redirect::to("/carrinho/adicionar/$request->sessao_id");

    }

    public function adcitem(Request $request) {
      Carrinho::create($request->all());
      return redirect('/carrinho');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carrinho $carrinho)
    {
        return view('areaInicio.carrinho.listaexcluir')->with('carrinho', $carrinho);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrinho $carrinho)
    {
      $carrinho->delete();
      return redirect('/carrinho');
    }
}
