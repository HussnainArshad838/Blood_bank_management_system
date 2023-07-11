@include('bloodbank.header')
@extends('bloodbank.layout')
@section('content')

<html>
<head></head>
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
    .customtablehead{
        background-color:#e04a54;
        color: White;
    }
</style>
<body>
    <div class="card customcard2" style="margin:20px;">
    <h2 class="card-header customcard"> Donor Details</h2>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="customtablehead">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Blood Group</th>
                    <th>Last Donation Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phoneno}}</td>
                <td>{{$item->bloodgroup}}</td>
                <td>{{$item->lastdonationdate}}</td>
                <td>
                <a href="{{url('bloodbank/view/'.$item->id) . '/edit'}}">
                        <button class="btn btn-success btn-sm">Update</button>
                </a>
                <form method="POST" action="{{ url('bloodbank'. '/'. $item->id) }}"style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a  href="{{ url()->previous() }}" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left"></i>Back</a>
    </div>
    </div>
</div>
</body>
</html>
@include('bloodbank.footer')
@endsection