<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Kayso</title>
  </head>
  <body>
    <div class="app">
      <div class="hero-header">
      <section class="header">
        <div class="container">
          <div class="row center-viewport">
            <div class="col align-self-center">
              <div class="row justify-content-center animate-scale-forth">
                <h1 class="header-title">Project</h1>
              </div>
              <div class="row justify-content-center kayso-title animate-scale-back">
                <span class="col ltr-1">K</span>
                <span class="col ltr-2">A</span>
                <span class="col ltr-3">Y</span>
                <span class="col ltr-4">S</span>
                <span class="col ltr-5">O</span>
              </div>
              <div class="row justify-content-center animate-opacity">
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link nav-links" href="#">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-links" href="#blog">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
      <section id="blog">
        <div class="container">
          <h1 class="display-3 blog-title">Blog</h1>
@foreach($posts as $post)
            <div class="card card-item">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-light">{{ $post->subtitle }}</h6>
                <p class="card-text">{{ $post->description }}</p>
                <a href="#" class="card-link text-light">Read More</a>
              </div>
            </div>
@endforeach            

      
      </section>
    </div>


     
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="scripts.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script>
        $(document).ready(function(){
              $(".header").height($(document).height());
        });
      </script>
  </body>
</html>