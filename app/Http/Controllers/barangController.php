<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris=4;
        if(strlen($katakunci)){
            $data = barang::where('kodeBarang', 'like', '%'.$katakunci.'%')
            ->orWhere('namaBarang', 'like', '%'.$katakunci.'%')
            ->orWhere('kategoriBarang', 'like', '%'.$katakunci.'%')
            ->paginate($jumlahbaris);
        }else{
            $data = barang::orderBy('kodeBarang','desc')->paginate(10);
        }
        return view('barang.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kodeBarang',$request->kodeBarang);
        Session::flash('namaBarang',$request->namaBarang);
        Session::flash('kategoriBarang',$request->kategoriBarang);
        Session::flash('harga',$request->harga);
        Session::flash('qty',$request->qty);
        $request->validate([
            'kodeBarang'=>'required|numeric|unique:barang,kodeBarang',
            'namaBarang'=>'required',
            'kategoriBarang'=>'required',
            'harga'=>'required|numeric',
            'qty'=>'required|numeric'
        ],[
            'kodeBarang.required' => 'Kode Barang wajib diisi',
            'kodeBarang.unique'=>'kode barang sudah ada',
            'namaBarang.required' => 'Nama Barang Wajib diisi',
            'kategoriBarang.required' =>'Kategori Barang wajib diisi',
            'harga.required'=>'Please insert price',
            'harga.numeric' =>'please input number',
            'qty.numeric'=>'please input number',
            'qty.required'=>'please insert quantity'
        ]);
        $data =[
            'kodeBarang'=>$request->kodeBarang,
            'namaBarang'=>$request->namaBarang,
            'kategoriBarang'=>$request->kategoriBarang,
            'harga'=>$request->harga,
            'qty'=>$request->qty,
        ];
        barang::create($data);
        return redirect()->to('barang')->with('success','Item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = barang::where('kodeBarang',$id)->first();
       return view('barang.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaBarang'=>'required',
            'kategoriBarang'=>'required',
            'harga'=>'required|numeric',
            'qty'=>'required|numeric'
        ],[
            'kodeBarang.unique'=>'kode barang sudah ada',
            'namaBarang.required' => 'Nama Barang Wajib diisi',
            'kategoriBarang.required' =>'Kategori Barang wajib diisi',
            'harga.required'=>'Please insert price',
            'harga.numeric' =>'please input number',
            'qty.numeric'=>'please input number',
            'qty.required'=>'please insert quantity'
        ]);
        $data =[
            'namaBarang'=>$request->namaBarang,
            'kategoriBarang'=>$request->kategoriBarang,
            'harga'=>$request->harga,
            'qty'=>$request->qty,
        ];
        barang::where('kodeBarang',$id)->update($data);
        return redirect()->to('barang')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barang::where('kodeBarang',$id)->delete();
        return redirect()->to('barang')->with('success','data deleted Successfully');
    }
}
