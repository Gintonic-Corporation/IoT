<?php

namespace App\Http\Controllers;
use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function show(Producer $producer)
    {
        return view('show.producer', compact('producer'));
    }


}
