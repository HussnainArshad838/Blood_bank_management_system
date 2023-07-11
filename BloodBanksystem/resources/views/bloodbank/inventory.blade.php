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
    .customtablehead{
        background-color:#e04a54;
        color: White;
    }
    .cutombtn{
        color: White;
        background-color:#DC3545;
        height:40px;
        border-radius: 5px;
    }
</style>
<body>
<div class="card customcard2" style="margin:20px;">
    <h2 class="card-header customcard">Inventory</h2>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="customtablehead">
                <tr>
                    <th>Blood Type</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->blood_type}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->status}}</td>
                <td>
                <a href="{{url('inventory/'.$item->id) . '/edit1'}}">
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
    </div>
    </div>
    </div>
        <div class="card customcard2" style="margin:20px;">
        <h2 class="card-header customcard">Add New Stock</h2>
        <div class="card-body">
        <a href="{{ url('/inventory/newinventory') }}" class="btn cutombtn">Add New</a>
        </div>
      </div>
</body>
</html>
@include('bloodbank.footer')
@endsection