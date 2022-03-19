<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function store(Request $request)
    {
        $color = Color::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'the color has added');
    }

    
}
