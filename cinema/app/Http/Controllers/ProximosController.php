<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filme;
use App\Proximo;

class ProximosController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $proximo = Proximo::all();
      $filme = Filme::all();
      return view('proximos.index')->with('proximo',$proximo)->with('filme',$filme);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $filme = Filme::all();
      return view('proximos.create')->with('filme',$filme);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      Proximo::create($request->all());
      return redirect('/proximos');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $filme = Filme::all();
      $proximo = Proximo::find($id);
      return view('proximos.show')->with('proximo',$proximo);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $filme = Filme::all();
      $proximo = Proximo::find($id);
      return view('proximos.edit')->with('proximo',$proximo)->with('filme',$filme);
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
      $proximo = Proximo::find($id);
      $proximo->filme_id = $request->filme_id;
      $proximo->save();
      return redirect('/proximos');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $proximo = Proximo::find($id);
      $proximo->delete();
      return redirect('/proximos');
  }
}
