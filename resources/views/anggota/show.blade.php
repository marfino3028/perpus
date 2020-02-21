@extends('layouts.index')
 @section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Anggota</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                      @foreach ($ar_anggota as $angt)
                    @if(!empty($angt->foto))
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img')}}/{{ $angt->foto }}"></td>

                @else
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img')}}/nofoto.png" alt="">
                @endif
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                   
            <tr>
                <td>Nama</td>
                <td>{{ $angt->nama }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $angt->alamat }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>{{ $angt->tmp_lahir }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>{{ $angt->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>{{ $angt->foto }}</td>
            </tr>
            <tr>
                <td>Buku Favorit</td>
                <td>{{ $angt->namabuku }}</td>
            </tr>
          @endforeach 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="{{url('/anggota')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a></td>
            </tr>
          </tfoot>
          </table>   
          </div>
          </div>
          </div>
  </div>
</div>
</div>
@endsection