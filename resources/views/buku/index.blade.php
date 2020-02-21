@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Gambar','Nama','Penerbit','Jenis Buku','Tanggal Terbit','Penanggung Jawab Buku','Action']; 
$no = 1; 

@endphp
<link rel="stylesheet" href="{{asset('note/css/bootstrap.css')}}">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Daftar Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <div class="card">
     @if (Auth::user()->role == 'Administrator')
  <div class="card-header">
<a href="{{route('buku.create')}}" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Buku</a>
<a href="{{url('buku-pdf')}}" class="btn btn-danger" target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
<a href="{{ url('export-buku') }}" 
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
                  @foreach ($ar_buku as $buku)
                <tr>
                  <td>{{ $no++ }}</td>
                  @if(!empty($buku->gambar))
                <td><img src="{{asset('img')}}/{{ $buku->gambar }}" width="70px"></td>
                @else
                <td><img src="{{asset('img')}}/nofoto.png" width="70px"></td>
                @endif
                  <td>{{ $buku->nama }}</td>
                  <td>{{ $buku->penerbit }}</td>
                  <td>{{ $buku->jenis }}</td>
                  <td>{{ $buku->tgl_terbit }}</td>
                  <td>{{ $buku->namapengurus }}</td>
                  <td>
                    <form method="POST" action="{{route('buku.destroy',$buku->id)}}">
                    <a href="{{route('buku.show',$buku->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                    @if (Auth::user()->role == 'Administrator')
                    <a href="{{route('buku.edit',$buku->id)}}" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    @endif
                    <a href="{{asset('pdf/'.$buku->pdf)}}" class="btn btn-danger" Target="_blank"><i class="far fa-file-pdf"></i>&nbsp;Baca Buku</a>
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
        <p>Dibawah ini ada daftar dari jenis Buku yang ada/tersedia dalam aplikasi website Ruang Baca Kami, Harap daftar ini bisa dimanfaatkan dalam mempermudah setiap Anggota Ruang Baca untuk mencari jenis buku yang ingin para Anggota baca dengan cara mengetik buku yang ingin anda cari di bagian search.
        <br>1. Cerita Rakyat
        <br>2. Pendidikan
        <br>3. Agama
        <br>4. IT dan Software
        <br>5. Seni dan Desain
        <br>6. Bisnis dan Marketing
        <br>7. Bahasa
        <br>8. Kesehatan</p>
      </div>
    </div>
  </div>
   @if (Auth::user()->role == 'Administrator')
   <div class="col-md-12">
                  <div class="box-body">
            <div class="alert alert-warning alert-dismissible fade show" role="alert"><b>
<i class="fa fa-info-circle ">&nbsp;</i>Informasi</b>
<p></p>
        <p>Jika ukuran file PDF yang di upload terlalu besar di sarankan untuk Admin agar mengaploadnya langsung ke folder. Admin bisa upload file PDF ke folder perpus/public/pdf.
        </p>
</div>
</div>
</div>
@endif
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