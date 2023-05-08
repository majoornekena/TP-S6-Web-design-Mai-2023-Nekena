
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="ARTISTA, Site web de Nekena concernant l'IA">
        <title>ARTISTA</title>
        <link rel="stylesheet" href="assets/Login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/Login/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/Login/css/Ludens-Users---2-Register.css">
        <link rel="stylesheet" href="assets/Login/css/styles.css">
    </head>
<body>
<style>
    .form-container {
        background-color: #eaf5f4;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: 0 auto;
    }

    .image-holder {
        height: 150px;
        background-size: cover;
        background-position: center;
        margin-bottom: 20px;
    }

    .front-office-link {
        display: block;
        text-align: center;
        color: #008080;
        font-size: 18px;
        margin-bottom: 20px;
        text-decoration: none;
    }

    .login-form {
        margin-top: 15%;
    }

    .text-center {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
    }

    #passwordsError {
        margin-bottom: 16.5px;
    }

    .btn-primary {
        color: #fff;
        background-color: #008080;
        font-weight: bold;
    }

    @media (max-width: 576px) {
        .form-container {
            max-width: 100%;
        }

        .image-holder {
            height: 120px;
        }

        .login-form {
            margin-top: 10%;
        }
    }
</style>
<br><br><br>
<section class="register-photo" style="background-color: transparent;">
<div class="form-container">
    <div class="image-holder" style="background: url(&quot;<?php echo asset('assets/Login/img/RH.jpg');?>&quot;);"></div>

    

    <form action="{{url('/log_admin')}}" method="post" class="login-form" style="height: auto;">
        {{ csrf_field() }}
        <h2 class="text-center"><strong>Bienvenue Admin</strong></h2>
        <div class="form-group mb-3">
            <input class="form-control" type="text" name="mail" value="admin" required placeholder="Email">
        </div>
        <div class="form-group mb-3">
            <input class="form-control" type="password" id="password" name="mdp" value="admin" placeholder="Mot de passe">
        </div>

        <div id="passwordsError" style="display: none;margin-bottom: 16.5px;">
            <span id="errorMessage" class="text-danger" style="font-size: 13px;"></span>
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-primary d-block w-100" id="submitButton" type="submit">SE CONNECTER</button>
        </div>

        @if (isset($erreur))
        <div class="alert alert-success flash animated" role="alert" style="background: rgb(255, 255, 255);text-align: center;border-style: none;">
            <span style="color: var(--bs-red);"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span>
        </div>
        @endif
    </form>
</div>
<a href="{{ url('/front') }}" class="front-office-link">Front Office</a>
    </section>
    <script src="assets/Login/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Login/js/bs-init.js"></script>

</body>
</html>
