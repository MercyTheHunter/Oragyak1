<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airlines;

class AirlinesController extends Controller
{
    public function postcreate()
    {
        return view("airlines.create");
    }

    public function store(Request $request)
    {
        $s = new Airlines();
        $s->name=request('name');
        $s->residence=request('origin');
        $s->save();

        // Airlines::create
        // (
        //     [
        //         'name' => request('name'),
        //         'residence' => request('origin')
        //     ]
        // );
        return view("welcome");
    }
}
