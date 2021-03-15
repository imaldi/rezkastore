@extends('layouts.app')
@section('title', 'Daftar produk')
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
                        <h6 class="h2 d-inline-block mb-0">Data Produk</h6>
                     </div>
                     @if (Auth::user()->role == "superadmin")
                    <div class="col-6 text-right">
                    <button class="btn btn-icon btn-success" type="button" data-toggle="modal" data-target="#addImport">
                        <span class="btn-inner--icon"><i class="fas fa-file-upload" aria-hidden="true"></i></span>
                        <span class="btn-inner--text">Upload File</span>
                    </button>
                    <button class="btn btn-icon btn-primary" type="button" data-toggle="modal" data-target="#addModal">
                        <span class="btn-inner--icon"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                        <span class="btn-inner--text">Tambah Data</span>
                    </button>
                    </div>
                    @endif
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
                      @if (Auth::user()->role == "superadmin")
                      <th>Harga Beli</th>
                      @endif
                      <th>Harga Satuan</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
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
                      @if (Auth::user()->role == "superadmin")
                      <th>Harga Beli</th>
                      @endif
                      <th>Harga Satuan</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach($produks as $produk)
                    <tr>
                      <td>{{$no ++ }}</td>
                      <td>
                        <div id={{ $produk->kode_barang }}>
                          <span class="kd-barang-field" >{!! DNS2D::getBarcodeHTML( $produk->kode_barang, "QRCODE",4,4) !!}</span>
                          <span class="kd-barang-field">{{ $produk->kode_barang }}</span><br>
                        </div>
                      </td>
                      <td>{{ $produk->nama_barang }}</td>
                      <td>{{ $produk->jenis_barang }}</td>
                      <td>{{ $produk->kategori->nama_kategori }}</td>
                      <td>{{ $produk->tipe }}</td>
                    <td><span class="ammount-box bg-secondary"><i class="mdi mdi-cube-outline"></i></span>{{ $produk->stok }}</td>
                    @if (Auth::user()->role == "superadmin")
                    <td><span class="ammount-box bg-green"><i class="mdi mdi-coin"></i></span>Rp. {{ format_uang($produk->harga_beli) }}</td>
                    @endif
                    <td><span class="ammount-box bg-green"><i class="mdi mdi-coin"></i></span>Rp. {{ format_uang($produk->harga) }}</td>
                    <td>
                      @if($produk->stok > 2)
                      <h3><span class="badge badge-lg badge-success">{{ $produk->keterangan }}</span></h3>
                      @elseif($produk->stok != 0)
                      <h3><span class="badge badge-lg badge-primary">Hampir Habis</span></h3>
                      @else
                      <h3><span class="badge badge-lg badge-danger"> Habis</span></h3>
                      @endif
                    </td>
                    
                    <td>
                    @if (Auth::user()->role == "superadmin")
                      <button data-toggle="modal" data-target="#editModal-{{ $produk->id }}" class="btn btn-sm btn-primary"data-tooltip="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" type="button" data-tooltip="tooltip" data-placement="bottom" title="hapus" id="{{ $produk->id }}" onclick="deletebarang(this.id)"> <i class="fa fa-trash"></i>
                          </button>
                          <form id="delete-form-{{ $produk->id }}" action="{{ route('daftar_produk.delete',$produk->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                          </form>
                          @endif
                          <button  class="btn btn-sm btn-default print" data-kode={{ $produk->kode_barang }} data-tooltip="tooltip" data-placement="bottom" title="print"><i class="fas fa-print"></i></button>
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

    <!-- Modal  Impor -->
    <div class="modal fade" id="addImport" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Upload Produk File Excel</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('daftar_produk.impor') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                  <div class="col-md-12 text-center">
                    <h5 class="h2 card-title mb-2">Langkah-Langkah Upload File</h5>
                    <div class="col-12 img-import-area">
                      <img src="{{ asset('assets/img/instructions/ImportProduct.jpg') }}" class="img-fluid mb-4" width="600px">
                    </div>
                    <div class="d-flex py-2 border-bottom">
	                      <div class="wrapper">
	                        <p class="font-weight-semibold text-gray mb-0">1. Siapkan data dengan format Excel (.xls atau .xlsx), atur seperti pada gambar</p>
	                      </div>
	                    </div>
	                    <div class="d-flex py-2 border-bottom">
	                      <div class="wrapper">
	                        <p class="font-weight-semibold text-gray mb-0">2. Isi kategori dengan no kategori, pastikan sudah terdaftar pada menu kategori</p>
	                      </div>
	                    </div>
                      <div class="d-flex py-2 border-bottom">
	                      <div class="wrapper">
	                        <p class="font-weight-semibold text-gray mb-0">3. Jika sudah sesuai pilih file</p>
	                      </div>
	                    </div>
	                    <div class="d-flex py-2 mb-4">
	                      <div class="wrapper">
	                        <p class="font-weight-semibold text-gray mb-0">4. Klik simpan, maka data otomatis tersimpan</p>
	                      </div>
	                    </div>
                  </div>
                    <div class="form-group row ">
                      <label for="kode_barang" class="col-md-2 col-form-label form-control-label text-center">Upload file<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="file" lang="en" name="file" required="required">
                          <label class="custom-file-label" for="customFileLang">Pilih File</label>
                        </div>
                      </div>
                  </div>

                    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Data</button>
            </div>
            </form>
         </div>
       </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Tambah Data produk</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('daftar_produk.create') }}" method="POST">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                  <div class="form-group row">
                      <label for="kode_barang" class="col-md-4 col-form-label form-control-label">Kode Produk<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Masukkan Kode Produk" id="kode_barang" name="kode_barang" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama_barang" class="col-md-4 col-form-label form-control-label">Nama Barang<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Masukkan Nama Barang" id="nama_barang" name="nama_barang" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="tipe" class="col-md-4 col-form-label form-control-label">Tipe <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Tipe HP" id="tipe" name="tipe" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="tipe" class="col-md-4 col-form-label form-control-label">Stok barang <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control number-input" name="stok" placeholder="Masukkan Stok Barang" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="nama_kategori">Harga Beli<span class="text-danger">*</span></label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Rp. </span>
                              </div>
                              <input type="text" class="form-control number-input" name="harga_beli" placeholder="Harga Beli">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="nama_kategori">Harga Jual<span class="text-danger">*</span></label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Rp. </span>
                              </div>
                              <input type="text" class="form-control number-input" name="harga" placeholder="Harga Jual">
                          </div>
                        </div>
                      </div>
                    </div>  
                    <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="jenis_barang">Jenis Produk<span class="text-danger">*</span></label>
                          <select class="form-control" name="jenis_barang" required="required">
                            <option disabled selected>-- Jenis Produk --</option>
                            <option value="aksessoris">Aksessoris</option>
                            <option value="sparepart">Sparepart</option>
                            <option value="service">Service</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="kategori_id">Kategori<span class="text-danger">*</span></label>
                          <select class="form-control" name="kategori_id" required="required">
                          <option disabled selected>-- Kategori Barang --</option>
                          @foreach($kategoris as $kategori)
                              <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                    </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
         </div>
       </div>
    </div>


    <!-- Modal  Edit -->
    @foreach ($produks as $produk)
    <div class="modal fade" id="editModal-{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Update Data produk</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('daftar_produk.update', $produk->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                    <!-- Input groups with icon -->
                    <div class="form-group row">
                      <label for="kode_barang" class="col-md-4 col-form-label form-control-label">Kode Produk<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $produk->kode_barang }}" id="kode_barang" name="kode_barang" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama_barang" class="col-md-4 col-form-label form-control-label">Nama Barang<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $produk->nama_barang }}" id="nama_barang" name="nama_barang" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="tipe" class="col-md-4 col-form-label form-control-label">Tipe <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $produk->tipe }}" id="tipe" name="tipe" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="jenis_barang">Stok barang<span class="text-danger">*</span></label>
                          <input type="text" class="form-control number-input" name="stok" value="{{ $produk->stok }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="nama_kategori">Harga<span class="text-danger">*</span></label>
                          <div class="input-group">
							  			      <div class="input-group-prepend">
							  				      <span class="input-group-text">Rp. </span>
							  		      	</div>
							  			      <input type="text" class="form-control number-input" name="harga" value="{{ $produk->harga }}">
							  		      </div>
                        </div>
                      </div>
                    </div>  
                    <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="jenis_barang">Jenis Produk<span class="text-danger">*</span></label>
                          <select class="form-control" name="jenis_barang" required="required">
                            <!-- <option disabled selected>-- Jenis Produk --</option> -->
                            <option value="aksessoris" {{ $produk->jenis_barang === 'aksessoris' ? 'selected' : '' }} >Aksessoris</option>
                            <option value="sparepart" {{ $produk->jenis_barang === 'sparepart' ? 'selected' : '' }} >Sparepart</option>
                            <option value="service" {{ $produk->jenis_barang === 'service' ? 'selected' : '' }} >Service</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="kategori_id">Kategori<span class="text-danger">*</span></label>
                          <select class="form-control" name="kategori_id" required="required">
                          <option disabled selected>-- Kategori Barang --</option>
                          @foreach($kategoris as $kategori)
                            <option 
                            @if($produk->kategori_id ==  $kategori->id)
                              selected="selected" 
                            @endif
                            value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                    </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
            </form>
         </div>
       </div>
    </div>
    @endforeach

  

    @include('layouts.footers.auth')  
    @section('scripts') 
   
    <script type="text/javascript">

    $(document).on('click','.print',function(e){
      var kode_barang=$(this).data('kode');
           $.print("#"+kode_barang);
    });

    function deletebarang(id) {
        swal({
            title: 'Yakin Ingin Hapus Data ini?',
            text: "Data Tidak Bisa Dikembalikan Setelah Dihapus!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
                swal(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success')
            } else (
                result.dismiss === swal.DismissReason.cancel
            ) 
        })
      } 

      $(function () {
      $('[data-tooltip="tooltip"]').tooltip()
      })
    </script>
    @endsection
@endsection