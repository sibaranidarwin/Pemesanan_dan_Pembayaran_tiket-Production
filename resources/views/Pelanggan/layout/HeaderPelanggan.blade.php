    <!-- ***** Header Area Start ***** -->
    <style>
        .hr{
     /*mengatur tinggi minimal garis*/
     min-height: 100%;
     /*mengatur tinggi maksimal garis*/
     max-height: 100vh;
     /*mengatur margin garis*/
     margin: 0;
   }
   .vertical{
     /*mengatur display pembungkus tag hr*/
     display: flex;
   }
    </style>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            <img src="{{ asset('pelanggan/assets/images/galeri/Logo_Kaldera.png') }}" alt="" style="width: 65%;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/#testimonials') }}">Pemesanan</a></li>
                            {{-- <li class="scroll-to-section"><a href="{{ url('/Pembayaran') }}">Pembayaran</a></li> --}}
                            <li class="scroll-to-section"><a href="{{ url('/Tiket') }}">Tiket</a></li>
                            <hr />
                            @if (Session::get('loginPelanggan') == True)
                            <li>
                                <a href="{{ url('/Login') }}"><i class="fa fa-shopping-cart fa-2x"></i></a>
                            </li>
                            <hr />
                                <li class="submenu"><a href="javascript:;">&emsp;&emsp; Selamat Datang, {{Session::get('nama_pelanggan')}}</a>
                                    <ul>
                                        <li><a href="{{url('/Profil')}}">Profil</a></li>
                                        <li><a href="{{url('/Logout')}}">Logout</a></li>
                                    </ul>
                                </li>   
                            @else
                                <li class="scroll-to-section">
                                    <a href="{{ url('/Login') }}">&emsp;&emsp;&emsp;&emsp; Masuk &nbsp;&nbsp;&nbsp;</a>
                                </li>
                                    <a class="btn btn-success " href="{{ url('/Register') }}">&nbsp; Daftar &nbsp;</a>
                            @endif
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

