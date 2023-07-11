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
    <div class="card customcard2" >
    <h2 class="card-title customcard">Edit Inventory</h2>  
      <form action="{{ url('bloodbank/' .$data->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control"/>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$data->email}}" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="tel" name="phoneno" id="phoneno" value="{{$data->phoneno}}" class="form-control"></br>
        <label for="bloodGroup">Blood Group:</label>
          <select class="form-control" name="bloodgroup"  id="bloodGroup" required>
            <option value="{{$data->bloodgroup}}" selected>{{$data->bloodgroup}}</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <br>
        <label for="donationDate">Last Donation Date:</label>
        <input type="date" class="form-control" value="{{$data->lastdonationdate}}" name="lastdonationdate" id="donationDate" required>
        <br>
        <input type="submit" value="Update" class="btn btn-primary btn-block custombtn"></br>
    </form>
    
</div>
</body>
</html>
@include('bloodbank.footer')
@endsection