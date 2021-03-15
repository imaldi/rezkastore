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
                     <div class="col-lg-4 col-7">
                        <h6 class="h2 d-inline-block mb-0">Rekapan Transaksi Penjualan</h6>
                     </div>
                     <div class="col-lg-6 text-right">
                     <div class="row input-daterange datepicker align-items-right">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-md-4 col-form-label form-control-label">Date Start</label>
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="Tanggal Awal" name="aqal" type="text" value="06/22/2018">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-md-4 col-form-label form-control-label">Date End</label>
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="End date" name="akhir" type="text" value="06/22/2018">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                     <div class="col-2 text-right">                     
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
                      <th>Kode Transaksi</th>
                      <th>Tanggal Transaksi</th>
                      <th>Nama Pembeli</th>
                      <th>Jumlah Produk</th>
                      <th>Subtotal</th>
                      <th>Kasir</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th width="30px">No</th>
                      <th>Kode Transaksi</th>
                      <th>Tanggal Transaksi</th>
                      <th>Nama Pembeli</th>
                      <th>Jumlah Produk</th>
                      <th>Subtotal</th>
                      <th>Kasir</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach($transaksis as $penjualan)
                    <tr>
                      <td>{{$no ++ }}</td>
                      <td>
                        {{ $penjualan->kode_transaksi }}
                      </td>
                      <td>{{ $penjualan->created_at }}</td>
                      <td>{{ $penjualan->daftar_pelanggan->nama_pelanggan }}</td>
                      <td>{{ $penjualan->total_barang }}</td>
                      <td>Rp. {{format_uang( $penjualan->subtotal)}}</td>
                      <td>{{ $penjualan->user->nama_user }}</td> 
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
    @section('optionaljs')
    <script src="{{ asset('assets')}}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    @endsection
    @section('scripts') 
   
    
    @endsection
@endsection