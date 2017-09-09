<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>  

    <style>

    #navbar{
        background-color:rgb(15, 143, 48);
    }
    .parallax {
        /* The image used */
        background-image: url('images/imagen3.jpg');

        /* Full height */
        height: 700px; 

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .parallax2 {
        /* The image used */
        background-image: url('images/parallax2.jpg');

        /* Full height */
        height: 700px; 

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block;
    }
    </style>

</head>
    <body>
    <nav id="navbar" class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" width="125" height="125" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-height:500px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox" style="max-height:500px">
                <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/slider1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>...</h3>
                    <p>...</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slider2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>...</h3>
                    <p>...</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slider3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>...</h3>
                    <p>...</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="parallax"></div>

    <div class="container">
        <img src="images/logo2.png" style="width:100%;">
    </div>

    <div class="parallax2"></div>

    <div class="container hidden-sm-down">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1346.1069430755638!2d-73.88347347774585!3d-41.893005252540476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9622f28b7ca5c111%3A0x7f9316c321a641b4!2sPaihuen+Yurts+%26+turismo!5e1!3m2!1ses!2scl!4v1504854890558" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div id="container2" class="container" style="height:200px;">
    </div>

    </body>
</html>