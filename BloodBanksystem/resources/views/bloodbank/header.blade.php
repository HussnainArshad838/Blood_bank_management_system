<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .custom-div {
      display: flex;
      align-items: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <img src="{{ asset('image/logo.png') }}" alt="Logo" class="logo cutomdiv" style="width: 100px; height:70px;">
      <a class="navbar-brand" href="{{route('home')}}">𝓑𝓵𝓸𝓸𝓭 𝓑𝓪𝓷𝓴</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('inventory')}}">Inventory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('signup')}}">Signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
