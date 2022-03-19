<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{



    public function store(Request $request)
    {
        $type = Type::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'the type has added');
    }

   
}
