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

	public function tambahBarang(Request $rq) //unboxing lewat parameter
	{
		DB::table('barang')->insert(
			[
				//nama field di db => $rq->name di form
				'kode' => $rq->kode,
				'nama' => $rq->nama,
				'harga' => $rq->harga
			]
		);
		return redirect('/tambahbarang');
	}

	public function tampilEdit($id)
	{
		$barang = DB::table('barang')->where('id',$id)->get();
		return view('formedit', ['hasil' => $barang]);
	}

	public function editBarang(Request $rq)
	{
		DB::table('barang')->where('id',$rq->id)->update(
			[
				'kode' => $rq->kode,
				'nama' => $rq->nama,
				'harga' => $rq->harga
			]
		);
		return redirect('/tampilbarang');
	}

	public function deleteBarang($id)
	{
		DB::table('barang')->where('id',$id)->delete();
		return redirect('/tampilbarang');
	}
}