@extends('layouts.app')
@section('title', 'Daftar Pelanggan')
@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body"> </div>
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
                <h6 class="h2 d-inline-block mb-0">Data Pelanggan</h6>
              </div>
              <div class="col-lg-6 col-5 text-right">
                <button class="btn btn-icon btn-primary" type="button" data-toggle="modal" data-target="#addModal">
                  <span class="btn-inner--icon"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                  <span class="btn-inner--text">Tambah Data</span>
                </button>
              </div>
            </div>
          </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th width="30px">No</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
                    <th>Member</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="20px">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
                    <th>Member</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach($daftar_pelanggan as $pelanggan)
                  <tr>
                    <td>{{$no++ }}</td>
                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->no_telp }}</td>
                    <td> {{ $pelanggan->diskon->nama_member }}</td>
                    <td>
                    <button data-toggle="modal" data-target="#editModal-{{ $pelanggan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-sm btn-danger" type="button" id="{{ $pelanggan->id }}" onclick="deletepelanggan(this.id)"> <i class="fa fa-trash"></i>
                        </button>
                        <form id="delete-form-{{ $pelanggan->id }}" action="{{ route('daftar_pelanggan.delete',$pelanggan->id) }}" method="POST" style="display: none;">
                          @csrf
                          @method('DELETE')
                        </form>
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

      <!-- Modal  Add -->
     <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Tambah Data Pelanggan</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('daftar_pelanggan.create') }}" method="POST">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                    <div class="form-group row">
                      <label for="addNamaPelanggan" class="col-md-4 col-form-label form-control-label">Nama <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="nama" placeholder="Nama Lengkap" id="addNamaPelanggan" name="addNamaPelanggan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="addAlamat" class="col-md-4 col-form-label form-control-label">Alamat <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="alamat" placeholder="Jatibarang" id="addAlamat" name="addAlamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="addNoTelp" class="col-md-4 col-form-label form-control-label">No.Telp <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="notelp" placeholder="083XXXXXXXXX" id="addNoTelp" name="addNoTelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="addNoTelp" class="col-md-4 col-form-label form-control-label">diskon Member <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                       <select class="form-control" name="AddDiskonid" id="AddDiskonid" >
                          <option disabled selected>-- Pilih Member --</option>
                          @foreach($diskons as $diskon)
                              <option value="{{ $diskon->id }}">{{ $diskon->nama_member }}</option>
                          @endforeach
                        </select>
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

     <!-- Modal  edit -->
     @foreach($daftar_pelanggan as $pelanggan)
     <div class="modal fade" id="editModal-{{ $pelanggan->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="editModalLabel">Update Data Pelanggan</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('daftar_pelanggan.update', $pelanggan->id) }}" method="POST" id="editForm">
                  @csrf
                  @method('PUT')
                    <!-- Input groups with icon -->
                    <div class="form-group row">
                      <label for="updateNamaPelanggan" class="col-md-4 col-form-label form-control-label">Nama <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $pelanggan->nama_pelanggan }}" id="updateNamaPelanggan" name="updateNamaPelanggan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="updateAlamat" class="col-md-4 col-form-label form-control-label">Alamat <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $pelanggan->alamat }}" id="updateAlamat" name="updateAlamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="updateNoTelp" class="col-md-4 col-form-label form-control-label">No.Telp <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $pelanggan->no_telp }}" id="updateNoTelp" name="updateNoTelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="updateDiskonid" class="col-md-4 col-form-label form-control-label">Status Member <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                       <select class="form-control" name="updateDiskonid" id="updateDiskonid" >
                          <option disabled selected>-- Pilih Member --</option>
                          @foreach($diskons as $diskon)
                            <option 
                            @if($pelanggan->diskon_id ==  $diskon->id)
                              selected="selected" 
                            @endif
                            value="{{ $diskon->id }}">{{ $diskon->nama_member }}</option>
                          @endforeach
                        </select>
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
    function deletepelanggan(id) {
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
    </script>
    @endsection  
    
@endsection