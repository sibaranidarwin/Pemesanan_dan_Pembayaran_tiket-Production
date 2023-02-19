<?php

namespace App\Http\Controllers;

use App\ModelTiket;
use App\ModelTempatWisata;
use App\ModelPemesanan;
use App\ModelPembayaran;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    public function index($id)     {  

        $tgl = Carbon::now()->format('Y-m-d');
        $pemesanan = ModelPemesanan::find($id);
        $tiket = ModelTiket::where('id_pemesanan',$id)->first();
        $tikets = ModelTiket::where('id_pemesanan',$id)->count();
        $besok = $pemesanan->created_at->addDays(1)->format('l, d F Y H:i');
        
         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = 'SB-Mid-server-jk6v6RjBITkkZR2Nisu3AV3h';
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
         
         $params = array(
             'transaction_details' => array(
                 'order_id' => rand(),
                 'gross_amount' => 12000,
             ),
            //  'item_details' => array(
            //      [
            //          'id' => 'a1',
            //          'price' => '10000',
            //          'quantity' => 1,
            //          'name' => 'Apel'
            //      ]),
            //      // ,[
            //      //     'id' => 'b1',
            //      //     'price' => '8000',
            //      //     'quantity' => 1,
            //      //     'name' => 'Jeruk'
            //      // ]
            //  ),
            //  'pemesanan' => array(
            //      'id' => $request->get('id'),
            //      'nama_pelanggan' => $request->get('nama_pelanggan'),
            //      'tanggal_wisata' => $request->get('tanggal_wisata'),
            //      'jumlah_tiket' => $request->get('jumlah_tiket'),
            //      'jumlah_harga' => $request->get('jumlah_harga'),
            //  ),
            'pemesanan' => array(
                'id' => 'S-1691551001',
                'nama_pelanggan' => 'Darwin Sibarani',
                'tanggal_wisata' => '2023-02-12',
                'jumlah_tiket' => '2',
                'jumlah_harga' => '24000',
            ),
         );
         $snap_token = \Midtrans\Snap::getSnapToken($params);
        //  dd($snap_token);
    
        return view('Pelanggan.halaman.Pembayaran',compact('tiket','tikets','pemesanan','besok', 'snap_token'));     
    }

    public function cariPembayaran(Request $request)
    {

        $query = $request->get('q');
        $pemesanan = ModelPemesanan::find($query);

        if (empty($pemesanan)) {
            return redirect('Pembayaran')->with('alert-danger','Id Pemesanan tidak ditemukan !');
        }else{
         
            return view('Pelanggan.halaman.Pembayaran', compact('pemesanan'));

        }


    }

    public function store( Request $request) {
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 15 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
            'maks_tiket.min' => 'tiket tidak boleh kurang dari 0',
            'foto.max' => 'tidak boleh lebih 2 Mb'
        ];

    	$this->validate($request, [
    		'id_pemesanan' => 'required|max:100',
    		'nominal' => 'required|max:50',
            'bukti_tf' => 'required|image|max:2048',
    	], $messages);

        $file = $request->file('bukti_tf'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('pelanggan/assets/images/bukti_tf',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $bayar = new ModelPembayaran();
        $bayar->id_pemesanan = $request->id_pemesanan;
        $bayar->nominal = $request->nominal;
        $bayar->status_bayar = 1;
        $bayar->bukti_tf = $nama_file;
    	$bayar->save();

        $pesan = ModelPemesanan::find($request->id_pemesanan);
        $pesan->status_pesan = 2;
        $pesan->save();

    	return redirect('/Pembayaran'.$request->id_pemesanan)->with('alert-success','Data berhasil ditambahkan!');
    }
}
