<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')->get();
        return view("barang.barang", ['barang_v' => $barang]);
    }

    public function tambah(){
        return view('barang.tambah');
    }

    public function store(Request $request){
        $tambah = [
            'brg_name'=>$request->brg_name,
            'brg_stok'=>$request->brg_stok,
            'brg_create_at' => date('Y-m-d H:i:s'),
            
        ];
        $query = DB::table('barang')->insert($tambah);
        if($query == 1){
            return 
            redirect('/barang')->with('success', "berhasil di tambahkan");
            
        }else{
            return 
            redirect('/barang')->with('erorr', "gagal di tambahkan");
        }
    }

    public function edit($id){
        $detail_barang = DB::table('barang')->where('brg_id',$id)->get();
        return view('barang.edit',['detail_barang' => $detail_barang]);
    }
    
    public function update(Request $request, $id){
        $data_update = [
            'brg_name'=>$request->brg_name,
            'brg_stok'=>$request->brg_stok,
            'brg_update_at'=>date('Y-m-d H:i:s')
        ];
        $query = DB::table('barang')->where('brg_id',$id)->update($data_update);
        if($query == 1){
            return 
            redirect('/barang')->with('success', "berhasil di ubah");
            
        }else{
            return 
            redirect('/barang')->with('erorr', "gagal di ubah");
        }
     }

     public function delete($id){
        $query = DB::table('barang')->where('brg_id',$id)->delete();
        if($query == 1){
            return 
            redirect('/barang')->with('success', "berhasil di hapus");
        }else{
            return 
            redirect('/barang')->with('erorr', "gagal di hapus");
        }
     }
}
