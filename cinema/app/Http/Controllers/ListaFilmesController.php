<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class ListaFilmesController extends Controller
{
    public function filmesAcao()
    {
      $filmes = Filme::where('genero', '=', 'Ação')->get();
      $genero = 'Ação';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }

    public function filmesComedia()
    {
      $filmes = Filme::where('genero', '=', 'Comédia')->get();
      $genero = 'Comédia';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }

    public function filmesAnimacao()
    {
      $filmes = Filme::where('genero', '=', 'Animação')->get();
      $genero = 'Animação';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }

    public function filmesRomance()
    {
      $filmes = Filme::where('genero', '=', 'Romance')->get();
      $genero = 'Romance';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }

    public function filmesSuspense()
    {
      $filmes = Filme::where('genero', '=', 'Suspense')->get();
      $genero = 'Suspense';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }

    public function filmesTerror()
    {
      $filmes = Filme::where('genero', '=', 'Terror')->get();
      $genero = 'Terror';
      return view('areaInicio.listaFilmes')->with('filmes', $filmes)->with('genero', $genero);
    }
}
