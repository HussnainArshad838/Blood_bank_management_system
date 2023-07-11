@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
    .customcard{
        color: White;
        background-color:#DC3545;
        height:40px;
        border-radius: 5px;
        padding: 0;
        
    }
    .customcard2{
        border: 1px #DC3545 solid;
    }
    .map-container {
      display: flex;
      justify-content: center; /* Center horizontally */
    }
</style>
<body>
<div class="card customcard2" style="margin:20px;">
<h2 class="card-header customcard"> Contact Information </h2>
      <p><b>Email:</b> meharaliaftab0306@gmail.com</p>
      <p><b>Phone:</b> +92-306-4096977</p>
      <p><b>Email:</b> hussnainrajpoot5415@gmail.com</p>
      <p><b>Phone:</b> +92-305-6046838</p>
      <p><b>Email:</b> jawadahmad52106@gmail.com</p>
      <p><b>Phone:</b> +92-309-4234851</p>
      <p><b>Email:</b> abdullahnehal505@gmail.com</p>
      <p><b>Phone:</b> +92-302-5808834</p>
      <p><b>Address:</b> Dream Avenue Housing Scheme, Lahore, Punjab, Pakistan</p>
</div>
<div class="card customcard2" style="margin:20px;">
<h2 class="card-header customcard"> Location </h2>
          <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=https://goo.gl/maps/4AyFoNbC8k5gMtDB6" 
              width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
          </div>
</div>

</body>
</html>
@include('bloodbank.footer')
@endsection