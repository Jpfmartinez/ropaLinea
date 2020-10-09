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
  <nav class="navbar navbar-light " style="background-color: #90FCFE; height:95px;" >
  
    <p class="titulo">+ParaTi</p>
    <center style="position: relative; bottom:10px;">
       <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </center>

    <ul class="nav justify-content-end">

      <li class="nav-item">
        <a href="#" class="fa" style="position:relative; top:5px;" ><img src="{{asset('icons/corazon-favorito.png')}}" alt=""></a>
      </li>
      
      <li class="nav-item">
        <a href="#" class="fa" style="position:relative; top:5px;" ><img src="{{asset('icons/carro-de-la-compra.png')}}" alt=""></a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-light">Iniciar Sesion</button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn">Registrarte</button>
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