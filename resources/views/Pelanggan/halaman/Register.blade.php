{{-- @extends('Pelanggan.layout.TampilanPelanggan')
@section('content')

<!-- content -->
    

        <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container header-text" id="top">
            <hr>
            <br>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Register Tiket Wisata</h6>
                        <h2>Wisata Indonesia</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            @if(\Session::has('alert-danger'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{Session::get('alert-danger')}}
                </div>
            @endif
            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                   
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="block-team-member-1 text-left rounded" style="border: 5px solid grey;">
                        <center><h2>Wisata Indonesia</h2><h6>
                            
                        </center>
                    </div>

                    <br><br>
                    <form enctype="multipart/form-data" class="" action="{{url('/AksiRegister')}}" method="post">

                        {{csrf_field()}}
    
                        <label><strong>Nama Pelanggan : </strong></label>
                        <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan">
                        <br>
                        @if ($errors->has('nama_pelanggan'))
                            <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_pelanggan') }}</p></span>
                        @endif

                        <label><strong>Nomor Handphone : </strong></label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone">
                        <br>
                        @if ($errors->has('no_hp'))
                            <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                        @endif
                        
                        <label><strong>Email : </strong></label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                        <br>
                        @if ($errors->has('email'))
                            <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
                        @endif

                        <label><strong>Password : </strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                        <br>
                        @if ($errors->has('password'))
                            <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
                        @endif

                        <input type="submit" class="btn btn-primary" value="Buat Akun">
                    </form>
                    <hr>
                    <a href="{{url('/Login')}}"><h6 style="color: green">Sudah Punya Akun</h6></a>
                
                </div>


            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

<!-- content -->

@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('pelanggan/assets/css/login.css') }}">

    <title>Register</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
            <header>  
                <a href="{{ url('/') }}">
                <img src="{{ asset('pelanggan/assets/images/galeri/Logo_Kaldera.png') }}" alt="">
                </a>
        </header>
        <span>Registration</span>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12">
            <form enctype="multipart/form-data" class="" action="{{url('/AksiRegister')}}" method="post">

                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" class="input" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan">
                    <i class='bx bx-user' ></i>
                    @if ($errors->has('nama_pelanggan'))
                    <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_pelanggan') }}</p></span>
                    @endif
                </div>

                <div class="input-field">
                    <input type="text" class="input" name="no_hp" placeholder="Masukkan Nomor Hp Pelanggan">
                    <i class='bx bx-user' ></i>
                    @if ($errors->has('no_hp'))
                    <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                    @endif
                </div>

                <div class="input-field">
                    <input type="text" class="input" name="email" placeholder="Masukkan Email Pelanggan">
                    <i class='bx bx-mail-send' ></i>
                    @if ($errors->has('email'))
                    <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
                    @endif
                </div>

                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="Masukkan Password Pelanggan">
                    <i class='bx bx-lock-alt' ></i>
                    @if ($errors->has('password'))
                    <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
                    @endif
                </div>
                
               
                <div class="input-field">
                    <input type="submit" class="submit" value="Register" id="">
                </div>

            </form>
        </div>
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="{{url('/Login')}}">Silahkan login!</a></label>
            </div>
        </div>
    </div>
</div>  
</body>
</html>