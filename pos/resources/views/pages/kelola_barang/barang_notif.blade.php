@extends('layouts.app')
@section('title', 'Daftar Produk Habis')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
             <div class="card-header">
                <div class="row align-items-center py-0">
                     <div class="col-lg-6 col-7">
                        <h6 class="h2 d-inline-block mb-0">Data Produk Segera Habis</h6>
                     </div>
                     <div class="col-6 text-right">
                        <a href="{{ route('daftar_produk.notifhabis') }}" class="btn btn-icon btn-primary" type="button"  >
                          <span class="btn-inner--icon"><i class="fas fa-file-pdf" aria-hidden="true"></i></span>
                          <span class="btn-inner--text">Download PDF</span>
                        </a>
                    </div>
                  </div>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr>
                    <th width="30px">No</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Jenis Produk</th>
                      <th>Kategori produk</th>
                      <th>Tipe HP</th>
                      <th>Stok</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="30px">No</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Jenis Produk</th>
                      <th>Kategori produk</th>
                      <th>Tipe HP</th>
                      <th>Stok</th>
                      <th>Keterangan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                      $no = 1;
                      $notificationproduk = \App\Models\Produk::where('stok', '<', 3)->get();
                    @endphp
                    @foreach($notificationproduk as $produk)
                    <tr>
                      <td>{{$no ++ }}</td>
                      <td>
                        {{ $produk->kode_barang }}
                      </td>
                      <td>{{ $produk->nama_barang }}</td>
                      <td>{{ $produk->jenis_barang }}</td>
                      <td>{{ $produk->kategori->nama_kategori }}</td>
                      <td>{{ $produk->tipe }}</td>
                      <td><span class="ammount-box bg-secondary"><i class="mdi mdi-cube-outline"></i></span>{{ $produk->stok }}</td>
                      <td>@if($produk->stok > 2)
                      <h3><span class="badge badge-lg badge-success">{{ $produk->keterangan }}</span></h3>
                      @elseif($produk->stok != 0)
                      <h3><span class="badge badge-lg badge-primary">Hampir Habis</span></h3>
                      @else
                      <h3><span class="badge badge-lg badge-danger"> Habis</span></h3>
                      @endif
                      
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div> 
        </div>
      </div>
    </div>
    </div>

    

    @include('layouts.footers.auth')  
    @section('scripts') 
   
    
    @endsection
@endsection