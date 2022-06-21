<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->paginate(4);
        $data = Testimoni::latest()->get();
        return view('pages.home',[
            'items' => $items,
            'data' => $data
        ]);
    }

}
