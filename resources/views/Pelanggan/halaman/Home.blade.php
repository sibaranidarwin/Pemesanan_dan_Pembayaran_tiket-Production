@extends('Pelanggan.layout.TampilanPelanggan')
@section('content')

<!-- content -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="pelanggan/assets/images/slide-01.jpg" alt="" >
                <div class="text-content">
                  <h3>Selamat Datang di Wisata Kaldera</h3>
                  <h5>Pemesanan Tiket Online Wisata Kaldera Toba Nomadic Escape</h5>
                  <a href="#testimonials" class="main-filled-button">Pesan Tiket</a>
                  <a href="#" class="main-stroked-button">Buat Akun</a>                  
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="pelanggan/assets/images/slide-02.jpg" alt="">
                <div class="text-content">
                  <h3>Selamat Datang di Wisata Kaldera</h3>
                  <h5>Pemesanan Tiket Online Wisata Kaldera Toba Nomadic Escape</h5>
                  <a href="#testimonials" class="main-filled-button">Pesan Tiket</a>
                  <a href="#" class="main-stroked-button">Buat Akun</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#testimonials"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    {{-- <section class="section" id="projects">
      <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3"> --}}
                {{-- <div class="section-heading">
                  <h4><b>&nbsp;Galeri Wisata Kaldera Toba Nomadic Escape!</b></h4>
                  <p>&nbsp;Semua tentang galeri wisata kaldera toba nomadic escape</p>
                       
                        @foreach ($galeri as $galeris)
                        <li data-filter=".{{$galeris->TempatWisata->id}}">&nbsp;{{$galeris->TempatWisata->nama_wisata}}</li>
                        @endforeach
                   </ul>
                <div class="filters-content">
                    <div class="">
                      @foreach ($galeri as $tampil)
                        <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12 all {{$tampil->TempatWisata->id}}">
                          <div class="item">
                            <a href="{{ url('pelanggan/assets/images/galeri/'.$tampil->nama_foto) }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ url('pelanggan/assets/images/galeri/'.$tampil->nama_foto) }}" alt=""></a>
                          </div>
                        </div>
                      @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
      </div> --}}
    {{-- </section> --}} 
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class=""> --}} 
                      <h4><b>Ayo Liburan ke destinasi menarik wisata kaldera!</b></h4>
                      <p style="font-size: 18px;">Ada berbagai pilihan tiket dengan harga yang spesial, lho. jangan sampai kehabisan ya!</p>
                      <br>
                    
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="pill" href="#home">Semua</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#menu1">Tiket Masuk</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#menu2">Hotel</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#menu2">Event</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#menu2">Atraksi</a>
                        </li>
                      </ul>
                      
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane container active" id="home">...</div>
                        <div class="tab-pane container fade" id="menu1">...</div>
                        <div class="tab-pane container fade" id="menu2">...</div>
                      </div>
                      
                </div> 
                @foreach($tempatWisata as $wisata)
                &nbsp; &nbsp;
                <div class="card">
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 mobile-bottom-fix-big">
                    <div class="item author-item">
                        <div class="member-thumb">
                        <img src="{{ url('pelanggan/assets/images/fotowisata/'.$wisata->foto) }}" height="200" width="240" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a href="/FormTiketWisata{{$wisata->id}}" class="main-filled-button">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: green">{{$wisata->nama_wisata}}</h4>
                        <span style="color: #000000">Harga Tiket : @rupiah($wisata->harga)</span><br>
                        <span style="color: black">Tersedia : {{($wisata->maks_tiket)}} Tiket</span>
                    </div>
                    <br><br>
                </div>
              </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
<!-- content -->

@endsection