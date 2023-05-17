<?php

namespace App\Http\Controllers;
use App\Models\Air_extractor;
use Illuminate\Http\Request;

class Air_extractorController extends Controller
{
    public function show(Air_extractor $air_extractor)
    {
        //$post = Post::findOrFail($id);
        return view('show.air_extractor', compact('air_extractor'));
    }
}
