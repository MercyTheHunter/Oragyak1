<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FlightController extends Controller
{
    public function show($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.show', ['flight' => $flight]);
        //$data=DB::table('flights')->get();
        //return view('', compact('id'));
    }
}