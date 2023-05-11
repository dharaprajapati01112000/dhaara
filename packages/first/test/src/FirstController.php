<?php

namespace First\Test;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    //
    public function add($a, $b){
        $result = $a + $b;
        return view('test::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
