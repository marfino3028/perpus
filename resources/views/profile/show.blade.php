 <!-- Illustrations -->
 @extends('layouts.index')
 @section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show Profile</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Show Profile</li>
            </ol>
          </div><!-- /.col -->
      </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Profile</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                    @if(!empty(Auth::user()->foto))
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/user')}}/{{ Auth::user()->foto }}"></td>

                @else
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/user')}}/nofoto.png" alt="">
                @endif
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                  
            <tr>
                <td>NIP/NIS</td>
                <td>{{ Auth::user()->nip_nis }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td>Jenis User</td>
                <td>{{ Auth::user()->role }}</td>
            </tr>
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="{{url('/profile')}}" 
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