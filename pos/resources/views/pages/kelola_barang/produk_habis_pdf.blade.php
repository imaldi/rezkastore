<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
        <!-- Page plugins -->
        <link rel="stylesheet" href="{{ asset('assets') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/argon.css?v=1.1.0" type="text/css">

    </head>
<body>
<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
<div class="text-center bg-white">
        <h2 class="h2 card-title mb-0">Daftar Produk Hampir Habis</h2>
        <small class="text-muted mb-5">Tanggal : {{ date('d M, Y') }} Waktu : {{ date('H:i') }}</small>
        <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                  <th width="30px">No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori produk</th>
                    <th>Tipe HP</th>
                    <th>Stok</th>
                    <th>Harga</th>
                  </tr>
                </thead>
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
                    <td>{{ $produk->kategori->nama_kategori }}</td>
                    <td>{{ $produk->tipe }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>Rp. {{ format_uang($produk->harga)}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>
</body>
</html>