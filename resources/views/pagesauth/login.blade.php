<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>DANA DREAMS - connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .form-container {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 10px;
            width: 400px;
            max-width: 100%;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input:focus {
            outline: none;
            border-color: #85b7d9;
            box-shadow: 0 0 5px rgba(133, 183, 217, 0.5);
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .forgot-password {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
        }

        .btn-outline-primary {
            border: 1px solid #3498db;
            background-color: transparent;
            color: #3498db;
        }

        .btn-outline-primary:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Connexon</h1>

        <form action="{{route('page-check')}}" method="post">
            @method('POST')
            @csrf
            <div class="results">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::get('echec'))
                <div class="alert alert-danger">
                    {{ Session::get('echec') }}
                </div>
                @endif
            </div>
            <div class="input-group custom">
                <input type="email" name="email" id="email" value="{{old('password')}}" class="form-control form-control-lg" placeholder="Email" required>
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg" placeholder="**********" required>
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Se connecter</button>
                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">ou</div>
                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('page-register')}}">S'inscrire</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('fail'))
    <script>
        toastr.error("{{ Session::get('fail') }}", "Echec", {
            positionClass: "toast-top-right",
            closeButton: true,
            progressBar: true,
            timeOut: 5000,
            extendedTimeOut: 2000,
        });
    </script>
    @endif
</body>

</html>
