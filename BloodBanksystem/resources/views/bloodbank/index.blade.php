@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')
<html>
<head>
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
    .cutombtn{
        color: White;
        background-color:#DC3545;
        height:40px;
        border-radius: 5px;
    }
</style>
</head>
<body>
  <br>
      <div class="card customcard2" style="margin:20px;">
        <h2 class="card-header customcard"> Register Donor </h2>
        <div class="card-body">
        <a href="{{ url('/bloodbank/create') }}" class="btn cutombtn">Add New</a>
        </div>
      </div>

      <div class="card customcard2" style="margin:20px;">
        <h2 class="card-header customcard"> View Donor Record</h2>
        <div class="card-body">
        <a href="{{ url('/bloodbank/View') }}" class="btn cutombtn">View</a>
        </div>
      </div>
 
      <section id="gallery" class="py-5">
  <div class="container">
    <div class="Card">
    <h2 class="card-header customcard text-center">Gallery</h2>
    <br>
    <div class="row">
      <div class="col-md-4 mb-4">
          <img src="{{ asset('image/abc.png') }}" alt="Image 1">
      </div>
      <div class="col-md-4 mb-4">
          <img src="{{ asset('image/cde.png') }}" class="img-fluid" alt="Image 2">  
      </div>
      <div class="col-md-4 mb-4"> 
          <img src="{{ asset('image/efg.png') }}" class="img-fluid" alt="Image 3">
      </div>
    </div>
    </div>
  </div>
</section>

<section id="video" class="py-5">
    <div class="container">
        <div class="Card">
            <h2 class="card-header customcard text-center">Video</h2>
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FvG7MyDsEjg" 
                    allowfullscreen width="400" height="400"></iframe>
                </div>
              </div>
              <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nOGKGBkBjJc" 
                    allowfullscreen width="400" height="400"></iframe>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
@include('bloodbank.footer')
@endsection
