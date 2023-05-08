<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="IA ARTISTA ETU001670 le site de Hasinjaka qui concerne l IA">
  <title>IA ARTISTA - ETU001543</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    /* Custom styles for theme */
    body {
      background-color: #f8f9fa;
      font-family: 'Inter', sans-serif;
    }

    .header {
      background-color: #3358ff;
      color: #fff;
    }

    .header .logo h1 {
      color: #fff;
    }

    .header .navbar .navbar-nav .nav-link {
      color: #fff;
    }

    .header .position-relative a,
    .header .position-relative i {
      color: #fff;
    }

    .hero-slider .swiper-slide .img-bg-inner h2,
    .hero-slider .swiper-slide .img-bg-inner p {
      color: #3358ff;
    }

    .posts h1 {
      color: #3358ff;
      margin-bottom: 20px;
    }

    .posts .card-title {
      color: #3358ff;
    }

    .footer-legal {
      background-color: #3358ff;
      color: #fff;
    }

    .footer-legal .credits a {
      color: #fff;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      .header .logo h1 {
        font-size: 24px;
      }

      .header .navbar .navbar-nav .nav-link {
        font-size: 14px;
      }

      .header .position-relative a,
      .header .position-relative i {
        font-size: 20px;
      }

      .hero-slider .swiper-slide .img-bg-inner h2 {
        font-size: 24px;
      }
      .hero-slider .swiper-slide .img-bg-inner p {
        font-size: 16px;
      }

      .posts .card-title {
        font-size: 18px;
      }

      .footer-legal .credits a {
        font-size: 14px;
      }
    }
  </style>
<body>
  <div class="container my-5">
    <div class="card card-xl">
      <div class="card-body">
        <h1 class="card-title">{{ $fiche->titre }}</h1>
        <p class="card-subtitle text-muted">{{ $fiche->datepublication }}</p>
        <img src="{{ $fiche->img }}" alt="{{ $fiche->titre }}" class="img-fluid my-4">
        <p class="card-text">{{ $fiche->resumer }}</p>
        <hr>
        <div class="card-text">
          {!! $fiche->contenu !!}
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVe1Xw"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
