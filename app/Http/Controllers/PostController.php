<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function show($nev)
    {
        $search=\DB::table('diaks')->where('nev',$nev)->nev='joska';
        $s = DB::select('select * from diaks');
        //dd($search);
        dd($s);
        return view('diaks', compact('diaks'));
    }
}
