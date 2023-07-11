@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>
  <div class="container">
    <div class="card customcard2">
      <h2 class="card-title customcard">Donor Form</h2>
      <form action="{{ route('bloodbank.store') }}" method="POST">
      @csrf
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" name="phoneno" id="phoneno" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
          <label for="bloodGroup">Blood Group:</label>
          <select class="form-control" name="bloodgroup" id="bloodGroup" required>
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
          <label for="donationDate">Last Donation Date:</label>
          <input type="date" class="form-control" name="lastdonationdate" id="donationDate" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block custombtn">Submit</button>
      </form>
    </div>
  </div>

</body>
</html>
@include('bloodbank.footer')
@endsection