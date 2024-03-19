<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DANA DREAMS - inscription</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/jquery-steps/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}">

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
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Créer un compte</h1>
        <div class="results">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif

            @if(session::get('echec'))
            <div class="alert alert-danger">
                {{ session::get('echec') }}
            </div>
            @endif
        </div>
        <form action="{{route('new-user')}}" method="POST" class="tab-wizard2">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="name">Nom*</label>
                <input type="text" name="name" id="name" class="form-control" required>
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom*</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
                <span class="text-danger">@error('firstname'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe*</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
            <button type="submit" class="btn-primary">S'inscrire</button>
        </form>
    </div>
</body>
</html>
