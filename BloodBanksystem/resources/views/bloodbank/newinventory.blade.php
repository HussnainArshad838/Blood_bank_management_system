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
<div class="card customcard2">
      <h2 class="card-title customcard">Add Inventory</h2>

          <form action="{{ route('storeinventory') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="blood_type">Blood Type:</label>
              <select class="form-control" name="blood_type" id="blood_type" required>
            <option value="" selected disabled>Select your blood group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
            </div>

            <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <div class="form-group">
              <label for="status">Status:</label>
              <select class="form-control" name="status" id="status" required>
            <option value="" selected disabled>Select Status</option>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
            <option value="Low Stock">Low Stock</option>

          </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block custombtn">Submit</button>
          </form>
        </div>
      </div> 
</div>
</body>
</html>
@include('bloodbank.footer')
@endsection