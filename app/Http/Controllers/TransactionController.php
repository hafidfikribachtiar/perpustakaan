<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Transaction;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = DB::table('transaction')->get();

    return view('transaction.index', compact('transaction'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Transaction::where('id_member', $request->id_member)->count() > 0){


            if(Book::where('id_book', $request->id_book)->count() > 0){
            
            
            // return $request;
            
            
            $transaction = new Transaction;
            
            
            // $transaksi->type_transaksi = $request->type_transaksi;
            
            
            $transaction->id_anggota = $request->id_member;
            
            
            $transaction->id_buku = $request->id_book;
            
            
            if($request->transaction == 'borrow'){
            
            
            $transaction->tgl_pinjam = $request->tgl_pinjam;
            
            
            $transaction->tgl_kembali = null;
            
            
            $transaction->save();
            
            
            return redirect('transaction')->with('msg','Data Berhasil di Simpan');
            
            
            }else{
            
            
            $transaction->tgl_kembali = $request->tgl_kembali;
            
            
            }
            
            
            // return $transaksi;
            
            
            }else{
            
            
            return json_encode('Buku tidak ditemukan!');
            
            
            }
            
            
            }else{
            
            
            return json_encode('Anggota tidak ditemukan');
            
            
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function show($id)
    {
        $borrow = DB::table('transaction')->where('transaction.id', '=', $id)->first();


return json_encode($borrow);


}


public function showBuku($id)


{


    // $buku = Buku::where('id_buku', $id)->first();




    if(Book::where('id_book', $id)->count() > 0){


    $book = DB::table('book')->get();


    return $book;


    }else{


    return 'false';


    }


}


public function getAnggota($id)


{


    // $buku = Buku::where('id_buku', $id)->first();




    $member = Member::where('id_member', $id)->first();


    // return $anggota;


    if($member === null){


    return 'false';


    }else{


    return $member;


        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $borrow = DB::table('transaction')->where('transaction.id', '=', $id)->first();


        return view('transaction.return', compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Transaction::where('id',$id)


        ->update(['tgl_kembali' => $request->tgl_kembali]);


        return redirect('transaction')->with('msg','Buku Telah dikembalikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
