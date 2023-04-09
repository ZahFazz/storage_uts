@extends('layout.template')     
@section('isi')
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('barang') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" 
                      value="{{ Request::get('katakunci') }}"
                       placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('barang/create') }}' class="btn btn-primary">+ Add Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Kode Barang</th>
                            <th class="col-md-2">Nama Barang</th>
                            <th class="col-md-2">Kategori barang</th>
                            <th class="col-md-2">Harga</th>
                            <th class="col-md-2">Quantity</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->kodeBarang }}</td>
                            <td>{{ $item->namaBarang }}</td>
                            <td>{{ $item->kategoriBarang }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>
                                <a href='{{ url('barang/'.$item->kodeBarang.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Delete Item?')" class='d-inline' action="{{ url ('barang/'.$item->kodeBarang) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </td>
                        </tr>
                    
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
            {{ $data->links() }}
               
          </div>
          <!-- AKHIR DATA -->
@endsection   

    