<?php

namespace App\Http\Controllers;
use App\Models\Compressor;
use App\Models\Compressor_sensor;
use Illuminate\Http\Request;

class CompressorController extends Controller
{
    public function show(Compressor $compressor)
    {
        //$post = Post::findOrFail($id);
        return view('show.compressor', compact('compressor'));
    }
}
