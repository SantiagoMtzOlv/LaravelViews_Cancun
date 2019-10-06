<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>NAVBAR prueba</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="{{ route('home') }}">
                <img src="img/logo.png" alt="We Love Cancún" width="200" height="auto"></img>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('resorts') }}"><i class="material-icons">apartment</i> Resorts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('tourist') }}"><i class="material-icons">directions</i> Tourist</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('testimonios') }}"><i class="material-icons">emoji_people</i> Testimonios</a>
                    </li>
                  </ul>
                </div>
              </nav>

              <br>
    @yield('content')
    <br>
    <footer class="main-footer bg-dark">
        <div class="container">
            <div class="row">
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="rounded border border-light text-light">
                        <center>
                            <br>
                            <sup class="help-block"><i class="material-icons" title="Contactanos">call</i><br>Lun a Vier de 10am a 5pm
                            <br>
                            Teléfonos:<br>
                            MEX: 01 800 1120590<br>
                            (998) 478 6246
                            <hr>
                            Cancún:<br>
                            (998) 478 6246
                            <hr>
                            USA:<br>
                            (866) 240 7920
                            <hr>
                            </sup>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="rounded border border-light text-light">
                        <center>
                            <hr>
                            <a href="{{ route('home') }}" style="text-decoration:none"><i class="material-icons">home</i> Home</a><br>
                            <hr>
                            <a href="{{ route('resorts') }}" style="text-decoration:none"><i class="material-icons">apartment</i> Resorts</a><br>
                            <hr>
                            <a href="#" style="text-decoration:none"><i class="material-icons">local_offer</i> Reserve</a><br>
                            <hr>
                            <a href="https://www.google.com/maps/place/Grand+Park+Royal+Canc%C3%BAn/@21.122762,-86.754131,16z/data=!4m8!3m7!1s0x0:0x97d40bcb58ea8ed!5m2!4m1!1i2!8m2!3d21.122762!4d-86.754131?hl=es-419">
                            <i class="material-icons">my_location</i> Localización
                            </a>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="rounded border border-light text-light">
                        <hr>
                        <center>
                        <a href="https://www.gob.mx/sectur"><img src="img/sectur.png" width="100"></img></a>
                        <hr>
                        <a href="https://www.tripadvisor.com.mx/"><img src="img/trip.png" width="100"></img></a>
                        <hr>
                        <a href="https://www.expedia.mx/"><img src="img/expedia.png" width="100"></img></a>
                        <hr>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <div class="row"></div>
        </div>
    </footer>              
</body>
</html>