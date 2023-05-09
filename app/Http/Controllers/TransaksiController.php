<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function transaksi(){
        $transaksi = DB::table('transaksi')->get();
        // dd($transaksi);
        return view("transaksi.transaksi", ['transaksi_v' => $transaksi]);
    }

    public function tambahtransaksi(){
        $barang = DB::table('barang')->get();
        return view('transaksi.tambahtransaksi',['barang_v' => $barang]);
    }

    public function storetransaksi(Request $request){
        $tambahtr = [
            'trc_user_name' =>$request->trc_user_name,
            'trc_create_at' => date('Y-m-d H:i:s')
        ]; 
        // dd(Request()->all());
        $inserttransaksi = DB::table('transaksi')->insertGetId($tambahtr);
        // dd($inserttransaksi);
        foreach ($request->dt_brg_jml as $index=>$row){
            if($row != null){
                $tambahob =[
                    'dt_brg_id' =>$request->barang[$index],
                    'dt_trc_id'=>$inserttransaksi,
                    'dt_brg_jml'=>$request->dt_brg_jml[$index]
                ];
        
                $inserttransaksi2 = DB::table('detail_transaksi')->insertGetId($tambahob);
                
                $barang = DB::table('barang')->where('brg_id',$request->barang[$index])->first();
                $currenstok = $barang->brg_stok - $request->dt_brg_jml[$index];
                $currenstok =[
                        'brg_stok'=>$currenstok
                ];
                $query = DB::table('barang')->where('brg_id',$request->barang[$index])->update($currenstok);

            }
        }
        if($query == 1){
        return 
        redirect('/transaksi')->with('success', "berhasil di tambahkan");
            
        }else{
            return 
            redirect('/transaksi')->with('erorr', "gagal di tambahkan");
        }
        
        // $currenstok = $barang[0]->brg_stok - $request->dt_brg_jml;
        // dd($currenstok);
    }
    public function detail(Request $request){
        $detail = DB::table('barang')->join('detail_transaksi','detail_transaksi.dt_brg_id','barang.brg_id')->where('dt_trc_id',$request->id)->get();
        return view('transaksi.detailtransaksi',['detail_v' => $detail]);
        dd($detail);
    }

}
