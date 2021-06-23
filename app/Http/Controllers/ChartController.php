<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $year = ['2015','2016','2017','2018','2019','2020'];

        $user = ['10','30','12','14','23','22'];

    	return view('chart')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}