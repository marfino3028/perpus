@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Kategori','Action']; 
$no = 1; 
@endphp
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Data Kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <div class="card">
  <div class="card-header">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Kelas
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- @include('guru.form') -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
            </div>
    <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                @foreach($ar_judul as $judul)    
                <th>{{ $judul }}</th>
                @endforeach
                </tr>
                </thead>
                <tbody>
                  @foreach ($ar_kelas as $kelas)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $kelas->nama }}</td>
                  <td>{{ $kelas->kategori }}</td>
                  <td>
                    <form method="POST" action="">
                    <a href="" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    </form>
                </td>
                </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
</div>

@endsection