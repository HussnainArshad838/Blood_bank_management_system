@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
</head>
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
        height: 350px;
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
    <div class="container ">
        <div class="card customcard2 ">
        <h2 class="card-title customcard">Login</h2>
          <div class="card-body customdiv">
        
            <form action="#" method="post">
            @csrf
            <!-- {{ csrf_field() }} -->
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
              </div>
              <button type="submit" class="btn btn-primary btn-block custombtn">Login</button>
            </form>
          </div>
        </div>
      </div>
<br>
<br>
<br>
</body>
</html>
@include('bloodbank.footer')
@endsection