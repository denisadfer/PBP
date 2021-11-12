<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerku extends Controller
{
	public function fhw()
	{
		return view('helloworld');
	}

	public function tampilBarang()
	{
		$barang = DB::table('barang')->get();
		return view('tampilbarang', ['barang' => $barang]);
	}
}