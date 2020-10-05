@extends('layouts.header')

@section('content')



<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carrusel" data-slide-to="0" class="active"></li>
    <li data-target="#carrusel" data-slide-to="1"></li>
    <li data-target="#carrusel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{asset('carrusel/1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('carrusel/2.jpg')}}" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('carrusel/3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<script src="/js/app.js" defer></script>
<link rel="stylesheet" href="/css/app.css">

<div class="container">
  <div class="row">
    <div class="col">
      <input  type="image" src="https://www.madrugon.com/wp-content/uploads/2019/06/carisma-blusa-roja-boleros-CA255-1-FONDO.jpg"  id="imgProducto" width="400px" height="400px"></input>
      <h2><center>Blusas</center> </h2>
    </div>
    <div class="col"><input type="image" id="imgProducto1"  src="https://www.madrugon.com/wp-content/uploads/2019/06/carisma-blusa-roja-boleros-CA255-1-FONDO.jpg" width="400px" height="400px">
    <h2><center>Pantalones</center> </h2>
    </div>
    <div class="w-400"></div>
    <div class="col"><input type="image" id="imgProducto2"  src="https://www.madrugon.com/wp-content/uploads/2019/06/carisma-blusa-roja-boleros-CA255-1-FONDO.jpg" width="400px" height="400px">
      <h2><center>Pantalones</center> </h2>
    </div>
    <div class="col"><input type="image" id="imgProducto3"  src="https://www.madrugon.com/wp-content/uploads/2019/06/carisma-blusa-roja-boleros-CA255-1-FONDO.jpg" width="400px" height="400px">
      <h2><center>Pantalones</center> </h2>
    </div>
  </div>
</div>


<div id="wom">

</div>

@endsection
