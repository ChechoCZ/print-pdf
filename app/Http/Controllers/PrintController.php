<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PrintController extends Controller
{
    public function show() {
    	return view('welcome');
    }

    public function print(Request $request) {


    	$data = $request->all();    	

    	$pdf = PDF::loadView('print', ['data' => $data]);
		return $pdf->download('print.pdf');

    }
}
