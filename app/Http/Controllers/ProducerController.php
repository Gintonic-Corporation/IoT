<?php

namespace App\Http\Controllers;
use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function show(Producer $producer)
    {
        //$post = Post::findOrFail($id);
        return view('show.producer', compact('producer'));
    }
}
