@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')
<html>
    <head></head>
<style>
        .card {
      max-width: 500px;
      margin: 0 auto;
      margin-top: 50px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      padding: 20px;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    .card-title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .btn-primary:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
    .customcard{
        color: White;
        background-color:#DC3545;
        height:40px;
        border-radius: 5px;
        padding-top: 5px;
    }
    .customcard2{
        border: 1px #DC3545 solid;
        height: 500px;
    }
    .custombtn{
        color: White;
        background-color:#DC3545;
        height:40px;
        border-radius: 5px;
    }
    .btn:hover{
        background-color:#336600;
    }
</style>
<body>
    

<div class="container">
<div class="card customcard2 ">
        <h2 class="card-title customcard">Sign Up</h2>
        <div class="card-body customdiv">
        <form method="POST" action="{{ route('signup') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block custombtn">Sign Up</button>
        </form>
    </div>
    </div>
    </div>
    <br>
</body>
</html>
@include('bloodbank.footer')
@endsection