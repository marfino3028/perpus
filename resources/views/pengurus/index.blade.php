@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','NIP','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto','Action']; 
$no = 1; 
@endphp
<link rel="stylesheet" href="{{asset('note/css/bootstrap.css')}}">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Pengurus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   <div class="card">
    @if (Auth::user()->role == 'Administrator')
  <div class="card-header">
    <a href="{{route('pengurus.create')}}" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Pengurus</a>
    <a href="{{url('pengurus-pdf')}}" class="btn btn-danger" target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
    <a href="{{ url('export-pengurus') }}" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel</a>
  </div>
  @endif
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
                  @foreach ($ar_pengurus as $pengurus)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $pengurus->nip }}</td>
                  <td>{{ $pengurus->nama }}</td>
                  <td>{{ $pengurus->alamat }}</td>
                  <td>{{ $pengurus->tmp_lahir }}</td>
                  <td>{{ $pengurus->tgl_lahir }}</td>
                   @if(!empty($pengurus->foto))
                <td align="center"><img src="{{asset('img')}}/{{ $pengurus->foto }}" width="140px" height ="120px"></td>
                @else
                <td align="center"><img src="{{asset('img')}}/nofoto.png" width="140px" height ="120px"></td>
                @endif
                  <td>
                    <form method="POST" action="{{route('pengurus.destroy',$pengurus->id)}}">
                    <a href="{{route('pengurus.show',$pengurus->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                    @if (Auth::user()->role == 'Administrator')
                    <a href="{{route('pengurus.edit',$pengurus->id)}}" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    @endif
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
          <div class="col-md-12">
                  <div class="box-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert"><b>
<i class="fa fa-info-circle ">&nbsp;</i>Informasi</b>
        <p></p>
        <p>Table diatas merupakan daftar Pengurus yang telah terdaftar menjadi Pengurus Aplikasi Ruang Baca Kami, Daftar Pengurus disini adalah user yang sudah mendaftar/registrasi akun di Aplikasi Ruang Baca Kami sebagai Administrator. Agar User Pengurus bisa terdaftar dalam fitur Pengurus hanya bisa di daftarkan oleh user Administrator Aplikasi Ruang Baca, jadi setelah membuat akun Administrator diharapkan untuk langsung membuat data dirinya di fitur Pengurus.
        </p>
      </div>
    </div>
  </div>
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