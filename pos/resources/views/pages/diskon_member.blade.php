@extends('layouts.app')
@section('title', 'Diskon Member')
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
                        <h6 class="h2 d-inline-block mb-0">Atur Diskon Member</h6>
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
                    <th>Nama Member</th>
                    <th>Jumlah Diskon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th width="30px">No</th>
                    <th>Nama Member</th>
                    <th>Jumlah Diskon</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($diskons as $diskon)
                  <tr>
                    <td>{{$diskon->id }}</td>
                    <td>{{ $diskon->nama_member }}</td>
                    <td>{{ $diskon->diskon }} <span>%</span></td>
                    <td>
                    <button data-toggle="modal" data-target="#editModal-{{ $diskon->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-sm btn-danger" type="button" id="{{ $diskon->id }}" onclick="deletediskon(this.id)"> <i class="fa fa-trash"></i>
                        </button>
                        <form id="delete-form-{{ $diskon->id }}" action="{{ route('diskon.delete',$diskon->id) }}" method="POST" style="display: none;">
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
                  <h5 class="modal-title mb-0" id="addModalLabel">Tambah Data Diskon</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('diskon.create') }}" method="POST">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                  <div class="form-group row">
                      <label for="addNamaMember" class="col-md-4 col-form-label form-control-label">Kategori Member</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Nama Kategori Member" id="addNamaMember" name="addNamaMember" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label form-control-label" for="nama_kategori">Diskon<span class="text-danger">*</span></label>
                          <div class="input-group col-md-8">
							  		<input type="text" class="form-control number-input" name="diskon" placeholder="Masukkan Nilai Diskon" >
                                <div class="input-group-addon input-group-append">
							  		<span class="input-group-text">%</span>
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
    @foreach ($diskons as $diskon)
    <div class="modal fade" id="editModal-{{ $diskon->id }}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Edit Data Diskon</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('diskon.update', $diskon->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                    <!-- Input groups with icon -->
                  <div class="form-group row">
                      <label for="addNamaMember" class="col-md-4 col-form-label form-control-label">Nama</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="{{ $diskon->nama_member }}" id="updateNamaMember" name="updateNamaMember" required>
                      </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-md-4 col-form-label form-control-label" for="nama_kategori">Diskon<span class="text-danger">*</span></label>
                          <div class="input-group col-md-8">
							  		<input type="text" class="form-control number-input" id="updateDiskon" name="updateDiskon" value="{{ $diskon->diskon }}" >
                                <div class="input-group-addon input-group-append">
							  		<span class="input-group-text">%</span>
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
    function deletediskon(id) {
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