@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','NIP/NIS','Nama','Email','Password','Role','Foto ','Action']; 
$no = 1; 
@endphp
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        @if (Auth::user()->role == 'Administrator')
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>Kelola User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Kelola User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <div class="card">
  <div class="card-header">
<a href="{{route('kelola_user.create')}}" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah User</a>

<a href="{{url('user-pdf')}}" class="btn btn-danger" Target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
<a href="{{ url('export-user') }}" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel
</a>


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
                  @foreach ($ar_kelolauser as $user)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $user->nip_nis }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>
                  <td>{{ $user->role }}</td>
                  @if(!empty($user->foto))
                <td><img src="{{asset('img/user')}}/{{ $user->foto }}" width="70px"></td>
                @else
                <td><img src="{{asset('img/user')}}/nofoto.png" width="70px"></td>
                @endif
                  <td>
                    <form method="POST" action="{{route('kelola_user.destroy',$user->id)}}">
                    <a href="{{route('kelola_user.show',$user->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="{{route('kelola_user.edit',$user->id)}}" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    </form>
                </td>
                </tr>
                 @endforeach
                </tbody>
              </table>
              @else
@include('layouts.terlarang')
@endif
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