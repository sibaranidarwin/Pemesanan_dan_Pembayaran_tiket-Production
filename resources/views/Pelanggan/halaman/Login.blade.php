<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('pelanggan/assets/css/login.css') }}">

    <title>Login</title>

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
        <span>Have an account?</span>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12">
            <form enctype="multipart/form-data" class="" action="{{url('/PostLogin')}}" method="post">

                {{csrf_field()}}
                <div class="input-field">
                    <input type="email" class="input" name="email" placeholder="Masukkan Email">
                    <i class='bx bx-user' ></i>
                </div>
        
                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="Masukkan Password">
                    <i class='bx bx-lock-alt'></i>
                </div>
        
                <div class="input-field">
                    <input type="submit" class="submit" value="Login" id="">
                </div>
                
                </form>
        
        </div>
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="{{url('/Register')}}">Belum Punya Akun?</a></label>
            </div>
        </div>
    </div>
</div>  
</body>
</html>