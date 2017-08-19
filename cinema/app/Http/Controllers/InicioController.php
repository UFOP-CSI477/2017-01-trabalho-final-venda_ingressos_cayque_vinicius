<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Proximo;

class InicioController extends Controller
{
    public function index()
    {
      $banners = Banner::orderBy('id')->get();
      $proximos = Proximo::orderBy('id')->get();
      return view('areaInicio.inicio')->with('banners', $banners)->with('proximos', $proximos);
    }
}
