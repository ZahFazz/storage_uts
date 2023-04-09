@extends('layout.template') 
@section('isi')

     <!-- START FORM -->
  <form action='{{ url('barang/'.$data->kodeBarang) }}' method='post'>
    @csrf 
    @method('put')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('barang') }}' class="btn btn-secondary">back</a>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                {{ $data->kodeBarang }}    
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='namaBarang' value="{{ $data->namaBarang }}" id="namaBarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Kategori Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kategoriBarang' value="{{ $data->kategoriBarang }}" id="kategoriBarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Harga </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='harga' value="{{ $data->harga }}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='qty' value="{{ $data->qty }}" id="qty">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
        </div>
      
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection 
