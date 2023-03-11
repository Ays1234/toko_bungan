<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vincent Luhur | Login</title>

    <link rel="icon" type="image/x-icon" href="assets/img/fav.ico">

    <link href="{{ asset('assets/inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/inspinia/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/inspinia/css/style1.css') }}" rel="stylesheet">

    <style>
        @font-face {
            font-family: "gothic", Sans-serif;
            src: url("../assets/font/GOTHIC.TTF");
            src: url("../assets/font/GOTHICB.TTF");
            }
            * {
            font-family: "Century Gothic", Sans-serif;
        }
        .logo{
            width: 200px;
        }
        .btn-send{
            background: #C49A6C;
            color: white;
        }
        .icon-eye{
            background: white;
            border: none;
            border-bottom: 1px solid #c49a6c;
            border-radius: 0;
        }
        .input{
            border: none;
            border-bottom: 1px solid #c49a6c;
            border-radius: 0;
        }
        .input-field{
            font-size: 14px;
            color: #c49a6c;
        }

        @media only screen and (max-width: 767px) {
            .bg-login{
                display: none;
            }
        }
    </style>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="ibox-content">
                    <div class="text-center mt-5">
                        <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-black.png') }}">
                    </div>
                    <form action="/login" class="mt-5" role="form" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input input-field" id="email" placeholder="email" required>
                        </div>
                        @error('email')
                        <div class='invalid-feedback'>
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" name="password" class="form-control input input-field" id="password" placeholder="password"
                                    name="password" value="" required>
                                    <span class="input-group-append">
                                        <button type="button"class="icon-eye" style="color: gray;" onclick="showpass()">
                                            <i  class="fa fa-eye-slash"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                        <button type="submit" class="btn block full-width m-b btn-send">Sign In</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 text-right px-0 bg-login">
                <img alt="..." class="" src="{{ asset('assets/img/bg-login.jpg') }}" width="100%">
            </div>
        </div>
    </div>


    <script>
        function showpass() {
        var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
