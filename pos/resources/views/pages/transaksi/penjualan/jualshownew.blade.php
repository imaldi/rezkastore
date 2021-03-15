@extends('layouts.app')
@section('title', 'Transaksi')
@section('css')
<link rel="stylesheet" href="{{ asset('css') }}/transaction/style.css" type="text/css">
@endsection
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h4 class="h1 text-white d-inline-block mb-0">Transaksi</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
        <form method="POST" name="transaction_form" id="transaction_form" action="{{ route('transaksi.proses') }}">
            @csrf
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                <div class="row">
                    <div class="col-12 bg-dark-blue">
                    <div class="card card-noborder b-radius bg-gradient-default shadow">
                        <div class="card-body ">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center transaction-header">
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="badge badge-lg badge-primary">
                                <i class="fas fa-exchange-alt"></i>
                                </div>
                                <div class="transaction-code ml-3">
                                <h3 class="m-0 text-white">Kode Transaksi</h3>
                                <p class="m-0 text-white">T{{ date('dmYHis') }}</p>
                                <input type="text" name="kode_transaksi" value="T{{ date('dmYHis') }}" hidden="">
                                </div>
                            </div>
                            <div class="btn-group mt-h">
                                <button class="btn btn-primary btn-sm btn-search" data-toggle="modal" data-target="#tableModal" type="button">
                                <i class="fas fa-search"></i></span>
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="card card-noborder b-radius">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-start align-items-center">
                            <div class="cart-icon mr-3">
                                <i class="mdi mdi-cart-outline"></i>
                            </div>
                            <p class="m-0 text-black-50">Daftar Pesanan</p>
                            </div>
                            <div class="table-responsive py-4">
                            <table class="table table-flush" id="trx">
                            <thead class="thead-light">
                                <tr>
                                    <td>Nama Barang</td><td>Harga</td><td>Jumlah</td><td>Total</td><td></td></tr></thead>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-noborder b-radius">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12 payment-1">
                        <table class="table-payment-1">
                            <tr>
                            <td class="text-left">Tanggal</td>
                            <td class="text-right">{{ date('d M, Y') }}</td>
                            </tr>
                            <tr>
                            <td class="text-left">Waktu</td>
                            <td class="text-right">{{ date('H:i') }}</td>
                            </tr>
                            <tr>
                            <td class="text-left">Kasir</td>
                            <td class="text-right">{{ auth()->user()->nama_user }}</td>
                            </tr>
                        </table>
                        </div>
                        <div class="col-12 mt-4">
                        <table class="table-payment-2">
                            <tr>
                            <td td class="text-left">
                                <input type="text" name="id_pelanggan" class="id_pelanggan-td" hidden="">
                                <span class="namapelanggan-td">Nama Pelanggan</span>
                                <span class="jenismember-td">Jenis Member</span>
                            </td>
                            <td class="text-right">
                                <button class="btn btn-primary btn-sm btn-search" data-toggle="modal" data-target="#tableModalPelanggan" type="button">
                                <i class="fas fa-search"></i></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td class="text-left">
                                <span class="subtotal-td">Subtotal</span>
                                <span class="jml-barang-td">0 Barang</span>
                            </td>
                            <td class="text-right nilai-subtotal1-td"><div id="subtotal">Rp. 0</div></td>
                            <td hidden=""><input type="text" class="nilai-subtotal2-td" name="subtotal" value="0"></td>
                            </tr>
                            <tr>
                            <td class="text-left">
                                <span class="diskon-td">Diskon</span>
                            </td>
                            <td class="text-right d-flex justify-content-end align-items-center pt-2">
                                <input type="number" class="form-control diskon-input mr-2" min="0" max="100" name="diskon" value="0" hidden="">
                                <span class="nilai-diskon-td mr-1">{{0}}</span>
                                <span>%</span>
                            </td>
                            </tr>
                            <tr>
                            <td colspan="2" class="text-center nilai-total1-td"><div id="total">Rp. 0</div></td>
                            <td hidden=""><input type="text" class="nilai-total2-td" name="total" value="0"></td>
                            </tr>
                        </table>
                        </div>
                        <div class="col-12 mt-2">
                        <table class="table-payment-3">
                            <tr>
                            <td>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp.</div>
                                </div>
                                <input type="text" class="form-control number-input input-notzero bayar-input" name="bayar" placeholder="Masukkan nominal bayar">
                                </div>
                            </td>
                            </tr>
                            <tr class="nominal-error" hidden="">
                            <td class="text-danger nominal-min">Nominal bayar kurang</td>
                            </tr>
                            <tr>
                            <td class="text-right">
                                <button class="btn btn-bayar" type="button">Bayar</button>
                            </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    
</div>

<!-- Modal Daftar Produk -->
<div class="modal fade" id="tableModal" tabindex="-1" role="dialog" aria-labelledby="tableModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="tableModalLabel">Daftar Barang</h5>
    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produks as $produk)
                        @if($produk->stok != 0)
                        <tr>
                            <td><p class="m-0">{{ $produk->kode_barang }}</p>
                                <p class="m-0 txt-light">{{ $produk->nama_barang }}</p></td>
                            <td><span class="badge  badge-primary"><i class="mdi mdi-cube-outline"></i></span>
                                <p class="m-0">{{ $produk->stok }}</p></td>
                            <td><span class="badge  badge-success"><i class="fas fa-coins"></i></span>
                                <p class="m-0">Rp. {{ format_uang($produk->harga,2,',','.') }}</p></td>
                            <td><a href="#"  data-stok={{ $produk->stok }} data-id={{ $produk->id }} data-nama={{ $produk->nama_barang }} data-kode={{ $produk->kode_barang }} data-harga={{ $produk->harga }} class="btn btn-primary btn-icon-only rounded-circle font-weight-bold btn-pilih" role="button"><i class="fas fa-chevron-right"></i></a></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer"></div>
</div>
</div>
</div>

<!-- Modal Nama Pelanggan -->
<div class="modal fade" id="tableModalPelanggan" tabindex="-1" role="dialog" aria-labelledby="tableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tableModalLabel">Daftar Pelanggan</h5>
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive py-0">
                            <table class="table table-flush" id="datatable-buttons">
                                <thead class="thead-light">
                                    <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Member</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($daftar_pelanggan as $pelanggan)
                                    <tr>
                                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $pelanggan->diskon->nama_member }}</td>
                                    <td><a href="#" data-id_p={{ $pelanggan->id }} data-nama='{{ $pelanggan->nama_pelanggan }}' data-diskon={{ $pelanggan->diskon->diskon }} data-member={{ $pelanggan->diskon->nama_member }} class="btn btn-primary btn-icon-only rounded-circle font-weight-bold btn-pilihpelanggan" role="button"><i class="fas fa-chevron-right"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@if ($message = Session::get('transaction_success'))
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body bg-grey">
          <div class="row">
            <div class="col-12 text-center mb-4">
              <img src="{{ asset('gif/success4.gif') }}">
              <h4 class="transaction-success-text">Transaksi Berhasil</h4>
            </div>
            @php
            $transaksi = \App\Models\Transaksi::where('transaksis.kode_transaksi', '=', $message)
            ->select('transaksis.*')
            ->first();
            @endphp
            <div class="col-12">
              <table class="table-receipt">
                <tr>
                  <td>
                    <span class="d-block little-td">Kode Transaksi</span>
                    <span class="d-block font-weight-bold">{{ $message }}</span>
                  </td>
                  <td>
                    <span class="d-block little-td">Tanggal</span>
                    <span class="d-block font-weight-bold">{{ date('d M, Y', strtotime($transaksi->created_at)) }}</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="d-block little-td">Kasir</span>
                    <span class="d-block font-weight-bold">{{ $transaksi->user->nama_user }}</span>
                  </td>
                  <td>
                    <span class="d-block little-td">Total</span>
                    <span class="d-block font-weight-bold text-success">Rp. {{ format_uang($transaksi->subtotal) }}</span>
                  </td>
                </tr>
              </table>
              <table class="table-summary mt-3">
                <tr>
                  <td class="line-td" colspan="2"></td>
                </tr>
                <tr>
                  <td class="little-td big-td">Bayar</td>
                  <td>Rp. {{ format_uang($transaksi->bayar) }}</td>
                </tr>
                <tr>
                  <td class="little-td big-td">Kembali</td>
                  <td>Rp. {{ format_uang($transaksi->kembali) }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-close-modal" data-dismiss="modal">Tutup</button>
          <a href="{{ url('/transaksi/struk/' . $message) }}" target="_blank" class="btn btn-sm btn-cetak-pdf">Cetak Struk</a>
        </div>
      </div>
    </div>
  </div>
  @endif

@include('layouts.footers.auth')

@section('scripts')
<script src="{{ asset('js') }}/transaction/script.js"></script>
<script type="text/javascript">

var subtotal=0;
var total=0;
var diskon=1;
var jumlah_barang=0;

@if ($message = Session::get('transaction_success'))
  $('#successModal').modal('show');
@endif

$(document).on('click', '.btn-pilih', function(e){
    e.preventDefault();
    var kode_barang = $(this).data('kode');
    var harga = $(this).data('harga');
    var produk_nama = $(this).data('nama');
    var stok = $(this).data('stok');
    var produk_id = $(this).data('id');

    subtotal += harga;
    diskon=parseInt($('.nilai-diskon-td').text());
    total = subtotal * ((100-diskon)/100)  ;

    jumlah_barang+=1;
    var check = $('.kode-barang-td:contains('+ kode_barang +')').length;
    if(check == 0){
    $('#trx').append('<tr><td><input type="text" name="produk_id[]" hidden="" value="' + produk_id + '"><input type="text" name="kode_barang[]" hidden="" value="' + kode_barang + '"><span class="nama-barang-td">' + produk_nama + '</span><span class="kode-barang-td">' + kode_barang + '</span></td><td><input type="text" name="harga_barang[]" hidden="" value="' + harga + '"><span>Rp. ' + parseInt(harga).toLocaleString() + '</span></td><td><div class="d-flex justify-content-start align-items-center"><input type="text" name="jumlah_barang[]" hidden="" value="1"><a href="#" class="btn-operate mr-2 btn-tambah"><i class="mdi mdi-plus"></i></a><span class="ammount-produk mr-2" unselectable="on" onselectstart="return false;" onmousedown="return false;"><p class="jumlah_barang_text">1</p></span><a href="#" class="btn-operate btn-kurang"><i class="mdi mdi-minus"></i></a></div></td><td><input type="text" class="total_barang" name="total_barang[]" hidden="" value="'+ harga +'"><span>Rp. '+ parseInt(harga).toLocaleString() +'</span></td><td><a href="#" class="btn btn-icons btn-rounded btn-secondary ml-1 btn-hapus"><i class="mdi mdi-close"></i></a></td><td hidden=""><span>'+stok+'</span></td></tr>');
    subtotalBarang();
    diskonBarang();
    jumlahBarang();
    $('.close-btn').click();

    $('.jml-barang-td').text(jumlah_barang);
}else{
        swal(
            "",
            "Barang telah ditambahkan",
            "error"
        );
        }

    $.ajax({
    url: "{{ url('/transaksi/produk') }}/" + kode_barang,
    method: "GET",
    success:function(response){
        var check = $('.kode-barang-td:contains('+ response.produk.kode_barang +')').length;
        alert(check);
        if(check == 0){
            tambahData(response.produk.kode_barang, response.produk.nama_barang, response.produk.harga, response.produk.stok, response.status);
        }else{
        swal(
            "",
            "Barang telah ditambahkan",
            "error"
        );
        }
    }
    });
});

$(document).on('click', '.btn-pilihpelanggan', function(e){
    e.preventDefault();

    var id_p = $(this).data('id_p');
    var nama = $(this).data('nama');
    var diskon = $(this).data('diskon');
    var member = $(this).data('member');
    $('.nilai-diskon-td').html(diskon);
    $('.namapelanggan-td').html(nama);
    $('.id_pelanggan-td').val(id_p);
    $('.jenismember-td').html(member);
    
    subtotalBarang();
    diskonBarang();
    jumlahBarang();
    $('.close-btn').click();
 // var total = parseInt($('.nilai-diskon-td').text());
});

$(document).on('click', '.btn-tambah', function(e){
e.preventDefault();
var stok = parseInt($(this).parent().parent().next().next().next().children().first().text());

  //alert($(this).parent().parent().next().next().next().children().first().prop("nodeName"));
  //alert($(this).parent().parent().next().next().next().children().first().html());

var  jumlah_barang = parseInt($(this).prev().val());
if(stok > jumlah_barang){
    var tambah_barang = jumlah_barang + 1;
    $(this).prev().val(tambah_barang);
    $(this).next().children().first().html(tambah_barang);
    var harga = parseInt($(this).parent().parent().prev().children().first().val());
    var total_barang = harga * tambah_barang;
    $(this).parent().parent().next().children().first().val(total_barang);
    $(this).parent().parent().next().children().eq(1).html('Rp. ' + parseInt(total_barang).toLocaleString());
    subtotalBarang();
    diskonBarang();
    jumlahBarang();
}else{
    swal("Tidak Bisa Tambah!", "Jumlah yang dimasukkan melebihi stok", "warning");
    }

});

$(document).on('click', '.btn-kurang', function(e){
e.preventDefault();
var jumlah_barang = parseInt($(this).prev().prev().prev().val());

if (jumlah_barang > 1) {
    var kurang_barang = jumlah_barang - 1;
    $(this).prev().prev().prev().val(kurang_barang);
    $(this).prev().children().first().html(kurang_barang);
    var harga = parseInt($(this).parent().parent().prev().children().first().val());
    var total_barang = harga * kurang_barang;
    $(this).parent().parent().next().children().first().val(total_barang);
    $(this).parent().parent().next().children().eq(1).html('Rp. ' + parseInt(total_barang).toLocaleString());
    subtotalBarang();
    diskonBarang();
    jumlahBarang();
}
});


$(document).on('click', '.btn-bayar', function(){
var total = parseInt($('.nilai-total2-td').val());
var bayar = parseInt($('.bayar-input').val());
var check_barang = parseInt($('.jumlah_barang_text').length);
var nama_pelanggan = $('.namapelanggan-td').html();

// alert(nama_pelanggan);

// return;

/*if (nama_pelanggan =="Nama Pelanggan"){
    swal(
            "",
            "Data Pelanggan Tidak Boleh Kosong",
            "error"
        );
}*/

if(bayar >= total){
    $('.nominal-error').prop('hidden', true);
    if(check_barang != 0){
        if($('.diskon-input').attr('hidden') != 'hidden'){
        $('.diskon-input').addClass('is-invalid');
        }else if(nama_pelanggan =="Nama Pelanggan"){
            swal(
            "",
            "Data Pelanggan Tidak Boleh Kosong",
            "error"
        );
        }else{
        $('#transaction_form').submit();
        }
    }else{
        swal(
            "",
            "Pesanan Kosong",
            "error"
        );
    }
    }else{
    if(isNaN(bayar)) {
        $('.bayar-input').valid;
    }else{
        $('.nominal-error').prop('hidden', false);
    }
    if(check_barang == 0){
        swal(
        "",
        "Pesanan Kosong",
        "error"
        );
    }
    }
});
</script>

@endsection
@endsection
