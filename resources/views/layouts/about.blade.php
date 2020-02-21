 <!-- Illustrations -->
 @extends('layouts.index')
 @section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">About</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Ruang Baca</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
      </div>
              <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Tentang Kami
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Ruang Baca Merupakan sebuah Aplikasi Website yang diperuntukan kepada setiap pengguna agar dapat mempermudah pengguna dalam membaca Buku berupa Ebook.
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visi & Misi
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        1. Untuk selalu memberi ebook pilihan terbaik kepada setiap Anggota.<br/>
        2. Selalu berusaha untuk menyediakan Jenis Buku yang cocok untuk digunakan para Anggota.<br/>
        3. Siap selalu memberikan materi fresh dan terkini dalam setiap materi ebook yang di upload.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Sejarah Organisasi
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Berawal dari para Santri Sekolah Programmer Generasi Ke 4 yang di adakan oleh NF Komputer Dan YBM PLN di Cisarua Bogor, yang mempunyai ide karena melihat para santri yang sering kurang merawat buku yang mereka miliki. Dari peristiwa ini kami mencoba untuk meringankan para santri agar mempermudah dalam penggunaan buku karena kita tak perlu untuk melakukan perawatan terhadap buku.
      </div>
    </div>
  </div>
  <br>
  <br>
    <!-- Start recent-blog Area -->
              <br>
              <br>
              <br>
      <section class="recent-blog-area section-gap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
              <center><h1>Team Kami</h1></center>
              <br><br>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-3 col-xs-6">
              <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="{{asset('img/devrio-1.jpg')}}" alt=""> 
              </div><br>
              <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                  <img class="img-fluid" src="{{asset('img/devrio.png')}}" alt="">
                 <span>Devrio Nur Fajri</span>
                </div>
                <div class="meta">
                  <i class="far fa-heart"></i> 15
                 <i class="far fa-comment"></i> 04
                </div>
              </div>  
              <hr>            
              <p>
                Administrator
                <br>Email : devrionur@gmail.com
                <br>Phone : +62 855 2384 2355
              </p>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="{{asset('note/img/marco.jpg')}}" alt=""> 
              </div><br>
              <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                  <img class="img-fluid" src="{{asset('img/marco.png')}}" alt="">
                  <span>Marco Syaputra</span>
                </div>
                <div class="meta">
                  <i class="far fa-heart"></i> 240
                  <i class="far fa-comment"></i> 04
                </div>
              </div>              
              <hr>            
              <p>
                Administrator
                <br>Email : marko48@gmail.com
                <br>Phone : +62 821 9058 4242
              </p>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="{{asset('note/img/imam.jpg')}}" alt=""> 
              </div><br>
              <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                  <img class="img-fluid" src="{{asset('img/imam.png')}}" alt="">
                <span>Imam Nurrizki</span>
                </div>
                <div class="meta">
                  <i class="far fa-heart"></i>&nbsp;15
                  <i class="far fa-comment"></i> 04
                </div>
              </div>              
              <hr>            
              <p>
                Administrator
                <br>Email : imannur22@gmail.com
                <br>Phone : +62 823 6501 5428
              </p>
            </div>                        
          <div class="col-lg-3 col-xs-6">
              <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="{{asset('note/img/cahyo.png')}}" alt=""> 
              </div><br>
              <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                  <img class="img-fluid" src="{{asset('img/cahyo.png')}}" alt="">
                  <span>Cahyo Arif</span>
                </div>
                <div class="meta">
                   <i class="far fa-heart"></i> 15
                  <i class="far fa-comment"></i> 04
                </div>
              </div>              
             <hr>            
              <p>
                Administrator
                <br>Email : cahyo@gmail.com
                <br>Phone : +62 821 3838 9990
              </p>
            </div>                        
                      
                        
          </div>
        </div>  
      </section>
      <!-- end recent-blog Area -->
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
</div>
</div>
</div>
</div>

@endsection