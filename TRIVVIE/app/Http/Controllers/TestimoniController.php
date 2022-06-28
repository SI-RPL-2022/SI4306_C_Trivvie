<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\User;
use App\Http\Request\TestimoniRequest;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // public function index(Request $request)
    // {
    //     return view('pages.testimoni');
    // }
    public function create()
    {
        return view('pages.testimoni');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Testimoni::create($data);

        return redirect('testimoni')->with('success','Testimoni created successfully!');
    }
}