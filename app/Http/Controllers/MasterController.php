<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function mastermahasiswa(){
        $sb_menu = "Mahasiswa";
        $sb_submenu = "mastermhs";

        if(!session()->has('mahasiswa')){
            session()->put('mahasiswa',array());
        }

        return view('mastermhs',['sb_menu'=>$sb_menu,'sb_submenu'=>$sb_submenu]);
    }
    public function mastermk(){
        $sb_menu = "Mahasiswa";
        $sb_submenu = "mastermk";

        return view('mastermk',['sb_menu'=>$sb_menu,'sb_submenu'=>$sb_submenu]);
    }
    public function masterkelas(){
        $sb_menu = "Mahasiswa";
        $sb_submenu = "masterkelas";

        return view('masterkelas',['sb_menu'=>$sb_menu,'sb_submenu'=>$sb_submenu]);
    }
    public function masterdosen(){
        $sb_menu = "Mahasiswa";
        $sb_submenu = "masterdosen";

        return view('masterdosen',['sb_menu'=>$sb_menu,'sb_submenu'=>$sb_submenu]);
    }
    public function submitmahasiswa(Request $req){
        $nama = $req->input('nama');
        $nim = $req->input('nim');
      
        session()->push('mahasiswa',array(
            'nama'=> $nama,
            'nim'=> $nim
        ));

        session()->flash('notif','Data Berhasil Disimpan!');

        return redirect('/mastermhs');
    }
    public function submitkelas(Request $req){
        $kelas = $req->input('kelas');
      
        session()->push('kelasmhs',array(
            'kelas'=> $kelas
        ));

        session()->flash('notif','Data Berhasil Disimpan!');

        return redirect('/masterkelas');
    }
    public function submitdosen(Request $req){
        $nmdsn = $req->input('nmdsn');
        $nip = $req->input('nip');
      
        session()->push('dosenmhs',array(
            'nmdsn'=> $nmdsn,
            'nip'=> $nip
        ));

        session()->flash('notif','Data Berhasil Disimpan!');

        return redirect('/masterdosen');
    }
    public function submitmk(Request $req){
        $mk = $req->input('mk');
      
        session()->push('mkmhs',array(
            'mk'=> $mk
        ));

        session()->flash('notif','Data Berhasil Disimpan!');

        return redirect('/mastermk');
    }
}
