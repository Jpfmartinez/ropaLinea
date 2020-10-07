<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<div>
<div class="fixed-top">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background-color: #90FCFE;">
      <h5 class="text-black h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-light " style="background-color: #90FCFE;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <center><p class="titulo">+ParaTi</p></center>
    <ul class="nav justify-content-end">
      <li class="nav-item">
      <button type="button" class="btn btn-outline-success" style="padding-left: 20px;  border-radius: 2em;"><img src="{{asset('icons/corazon.png')}}" alt="Mi carrito">
     <!--    <a href="#" class="fa" style="padding-left: 20px; padding-rigth:5px;"><img src="{{asset('icons/corazon.png')}}" alt="Mi carrito"></a> -->
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-outline-success" style="padding-left: 20px;  border-radius: 2em;"><img src="{{asset('icons/bolsa-de-la-compra.png')}}" alt="Mi carrito">
        <!-- <a href="#" class="fa" style="padding-left: 5px;"><img src="{{asset('icons/bolsa-de-la-compra.png')}}" alt="Mi carrito"></a> -->
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-outline-success" style="padding-left: 20px; margin: 5px 2px;  border-radius: 2em;"><img src="{{asset('icons/registrarse.png')}}">Registrarse</button>
      </li>
    <li class="nav-item">
      <button type="button" class="btn btn-outline-warning" style="padding-left: 20px; margin: 5px 2px;  border-radius: 2em;"><img src="{{asset('icons/avatar.png')}}">Iniciar Sesion</button>
    </li>

</ul>
  </nav>
 </div>
 
</div>

<main class="py-4">
            @yield('content')
</main>
</body>
@extends('layouts.footer')
</html>