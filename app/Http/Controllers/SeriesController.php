<?php

namespace App\Http\Controllers;

use App\Models\serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class seriesController extends Controller
{
    public function index()
    {
        $series = serie::all();

        return view("series.index")->with("series",$series);
    }

    public function create()
    {
     return view("series.create");
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new serie();
        $serie->nome = $nomeSerie;
        $serie->save();
            return redirect("series/");
    }
}
