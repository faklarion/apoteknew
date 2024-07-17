<?php

namespace App\Http\Controllers;
use App\Models\Obat; // model yang diimpor

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function getObat() {
        $obat = Obat::all();

        return view('obat.list')->with(compact('obat'));
    }

    public function createObat() {
        return view('obat.form');
    }

    public function insertObat(Request $request) {
        $obat = new Obat();

        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->supplier = $request->supplier;
        $obat->stok = $request->stok;
        $obat->tanggal_expired = $request->tanggal_expired;

        $obat->save();

        return redirect('/obat');
    }

    public function showFormUpdate($obat_id) {
        $obat = Obat::find($obat_id);

        return view('obat.edit')->with(compact('obat'));
    }

    public function updateObat(Request $request, $obat_id) {
        $obat = Obat::find($obat_id);

        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->supplier = $request->supplier;
        $obat->stok = $request->stok;
        $obat->tanggal_expired = $request->tanggal_expired;

        $obat->save();        

        return redirect('/obat');
    }

    public function deleteObat($obat_id) {
        Obat::where('id',$obat_id)->delete();

        return redirect('/obat');
    }
}
