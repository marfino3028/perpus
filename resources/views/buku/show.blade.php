@extends('layouts.index')
 @section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Buku</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                      @foreach ($ar_buku as $bu)
                    @if(!empty($bu->gambar))
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img')}}/{{ $bu->gambar }}"></td>

                @else
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img')}}/nofoto.png" alt="">
                @endif
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                   
            <tr>
                <td>Nama</td>
                <td>{{ $bu->nama }}</td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>{{ $bu->penerbit }}</td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td>{{ $bu->jenis }}</td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td>{{ $bu->tgl_terbit }}</td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>{{ $bu->gambar }}</td>
            </tr>
            <tr>
                <td>Penanggung Jawa Buku</td>
                <td>{{ $bu->namapengurus }}</td>
            </tr>
            <tr>
                <td>PDF</td>
                <td>{{ $bu->pdf }}</td>
            </tr>
          @endforeach 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="{{url('/buku')}}" 
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