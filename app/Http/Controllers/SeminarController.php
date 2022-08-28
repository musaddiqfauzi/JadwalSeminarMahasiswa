<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Seminar;

class SeminarController extends Controller
{

    public function index()
    {
        return view('Mahasiswa.index');
    }

    public function store(Request $request)
    {
        $nim = '1504103010034';

        $file_borang_ta_1 = Storage::putFile('proposal/' . $nim, $request->file('borang_ta_1'));
        $file_transkrip_online = Storage::putFile('proposal/' . $nim, $request->file('transkrip_online'));
        $file_proposal_ta = Storage::putFile('proposal/' . $nim, $request->file('proposal_ta'));
        $file_lembaran_plagiasi = Storage::putFile('proposal/' . $nim, $request->file('lembaran_plagiasi'));
        $file_slide_presentasi = Storage::putFile('proposal/' . $nim, $request->file('slide_presentasi'));
        $file_bukti_persetujuan = Storage::putFile('proposal/' . $nim, $request->file('bukti_persetujuan'));

        $borang_ta_1 = $request->file('borang_ta_1')->getClientOriginalName();
        $transkrip_online = $request->file('transkrip_online')->getClientOriginalName();
        $proposal_ta = $request->file('proposal_ta')->getClientOriginalName();
        $lembaran_plagiasi = $request->file('lembaran_plagiasi')->getClientOriginalName();
        $slide_presentasi = $request->file('slide_presentasi')->getClientOriginalName();
        $bukti_persetujuan = $request->file('bukti_persetujuan')->getClientOriginalName();

        $seminar = new Seminar;
        $seminar -> name = 'akmal fadhilah';
        $seminar -> nim = $nim;
        $seminar -> judul = $request->judul;
        $seminar -> dosen_wali = $request->dosen_wali;
        $seminar -> dosen_pembimbing_1 = $request->dosen_pembimbing_1;
        $seminar -> dosen_pembimbing_2 = $request->dosen_pembimbing_2;
        $seminar -> bidang = $request -> bidang;

        $seminar -> borang_ta_1 = $borang_ta_1;
        $seminar -> transkrip_online = $transkrip_online;
        $seminar -> proposal_ta = $proposal_ta;
        $seminar -> lembaran_plagiasi = $lembaran_plagiasi;
        $seminar -> slide_presentasi = $slide_presentasi;
        $seminar -> bukti_persetujuan = $bukti_persetujuan;

        $seminar -> file_borang_ta_1 = $file_borang_ta_1 ;
        $seminar -> file_transkrip_online = $file_transkrip_online;
        $seminar -> file_proposal_ta = $file_proposal_ta;
        $seminar -> file_lembaran_plagiasi = $file_lembaran_plagiasi;
        $seminar -> file_slide_presentasi = $file_slide_presentasi;
        $seminar -> file_bukti_persetujuan = $file_bukti_persetujuan;

        $seminar -> keterangan = 'seminar proposal';
        $seminar -> save();

        return redirect()->route('beranda')->with('message', 'Upload complete');
    }

    public function seminarhasil(Request $request)
    {
        $nim = '1504103010034';
        $file_borang_ta_1 = Storage::putFile('hasil/' . $nim, $request->file('borang_ta_1'));
        $file_buku_skripsi = Storage::putFile('hasil/' . $nim, $request->file('buku_skripsi'));
        $file_slide_presentasi = Storage::putFile('hasil/' . $nim, $request->file('slide_presentasi'));
        $file_bukti_persetujuan = Storage::putFile('hasil/' . $nim, $request->file('bukti_persetujuan'));


        $borang_ta_1 = $request->file('borang_ta_1')->getClientOriginalName();
        $buku_skripsi = $request->file('buku_skripsi')->getClientOriginalName();
        $slide_presentasi = $request->file('slide_presentasi')->getClientOriginalName();
        $bukti_persetujuan = $request->file('bukti_persetujuan')->getClientOriginalName();

        $seminar = new Seminar;
        $seminar -> name = 'akmal fadhilah';
        $seminar -> nim = $nim;
        $seminar -> judul = $request->judul;
        $seminar -> dosen_pembimbing_1 = $request->dosen_pembimbing_1;
        $seminar -> dosen_pembimbing_2 = $request->dosen_pembimbing_2;
        $seminar -> bidang = $request -> bidang;

        $seminar -> borang_ta_1 = $borang_ta_1;
        $seminar -> buku_skripsi = $buku_skripsi;
        $seminar -> slide_presentasi = $slide_presentasi;
        $seminar -> bukti_persetujuan = $bukti_persetujuan;

        $seminar -> file_borang_ta_1 = $file_borang_ta_1 ;
        $seminar -> file_buku_skripsi = $file_buku_skripsi;
        $seminar -> file_slide_presentasi = $file_slide_presentasi;
        $seminar -> file_bukti_persetujuan = $file_bukti_persetujuan;

        $seminar -> keterangan = 'seminar hasil';
        $seminar -> save();

        return redirect()->route('beranda')->with('message', 'Upload complete');
    }
}
