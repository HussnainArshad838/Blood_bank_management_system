@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<body>
  <div class="container">
    <h1 class="mt-5">Blood Bank Management System</h1>
    <h2 class="text-muted">About</h2>
    <p>Welcome to our Blood Bank Management System, Our blood bank is a vital healthcare facility that 
        collects, tests, processes, and stores donated blood for transfusion purposes. It serves as 
        a lifeline in medical emergencies, surgeries, and treatments for patients in need of blood 
        transfusions. Blood banks play a crucial role in maintaining an adequate supply of blood 
        products, ensuring the availability of different blood types and components. They follow 
        strict quality and safety standards to ensure the donated blood is safe for transfusion. 
        Through voluntary blood donations, blood banks contribute to saving countless lives and 
        improving the health of individuals in communities.</p>

    <div class="row mt-4">
      <div class="col-md-6">
        <h3>Our Mission</h3>
        <p>Our mission is to meet the increasing demand for blood and blood products while upholding 
            the highest standards of safety, quality, and service. Through our dedicated team, advanced 
            technologies, and community engagement, we aim to make a positive impact on the lives of 
            patients, empower blood donors, and collaborate with healthcare partners to enhance patient 
            care and outcomes.</p>
      </div>
      <div class="col-md-6">
        <h3>Our Vision</h3>
        <p>Our vision is to ensure a constant and readily available supply of safe and high-quality 
            blood to meet the healthcare needs of our community, saving lives and promoting the 
            well-being of individuals in times of emergency and medical treatments.</p>
      </div>
    </div>

    <div class="mt-4">
      <h3>Why Choose Us?</h3>
      <ul>
        <li>Experienced team of professionals</li>
        <li>High-quality blood storage facilities</li>
        <li>Efficient blood donation and distribution system</li>
        <li>Strict adherence to safety and quality standards</li>
      </ul>
    </div>
  </div>
</body>
</html>
@include('bloodbank.footer')
@endsection