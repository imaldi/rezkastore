@extends('layouts.app')
@section('title', 'Daftar kategori')
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
                        <h6 class="h2 d-inline-block mb-0">Data Kategori</h6>
                     </div>
                    <div class="col-6 text-right">
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
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th width="30px">No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach($kategoris as $kategori)
                  <tr>
                    <td>{{$no++ }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                    <button data-toggle="modal" data-target="#editModal-{{ $kategori->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-sm btn-danger" type="button" id="{{ $kategori->id }}" onclick="deletekategori(this.id)"> <i class="fa fa-trash"></i>
                        </button>
                        <form id="delete-form-{{ $kategori->id }}" action="{{ route('kategori.delete',$kategori->id) }}" method="POST" style="display: none;">
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
                  <h5 class="modal-title mb-0" id="addModalLabel">Tambah Data Kategori</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('kategori.create') }}" method="POST">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                  <div class="form-group row">
                      <label for="addNamaKategori" class="col-md-2 col-form-label form-control-label">Nama</label>
                      <div class="col-md-10">
                        <input class="form-control" type="nama" placeholder="Nama Kategori" id="addNamaKategori" name="addNamaKategori" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
    @foreach ($kategoris as $kategori)
    <div class="modal fade" id="editModal-{{ $kategori->id }}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Edit Data Kategori</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                    <!-- Input groups with icon -->
                  <div class="form-group row">
                      <label for="addNamaKategori" class="col-md-2 col-form-label form-control-label">Nama</label>
                      <div class="col-md-10">
                        <input class="form-control" type="nama" value="{{ $kategori->nama_kategori }}" id="updateNamaKategori" name="updateNamaKategori" required>
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
    function deletekategori(id) {
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