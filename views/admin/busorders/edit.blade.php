@extends('admin.layouts.master')
@section('title','Bus Order Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Bus Order Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bus Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('busorders.index') }}">Back</a>
                </div>
                </div>
    
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('busorders.update',$busorder->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="useremail" value="{{$busorder->useremail}}">
                    <div class="row">
    
                        <div class="col-6">
                            <p>Your Name</p>
                            <input type="text" name="name" id="name" value="{{$busorder->name}}">
                        </div>
                        <div class="col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" value="{{$busorder->email}}">
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col-6">
                            <p>Select Date</p>
                            <input type="date" name="date" id="date" value="{{$busorder->date}}">
                        </div>
                        <div class="col-6">
                            <p>Phone Number </p>
                            <input type="tel" name="phone" id="phone" value="{{$busorder->phone}}">
                        </div>
                    </div>

                    <div class="bf-row">
                        <div class="bf-col-6">
                            <p>Destination From</p>
                            <input type="text" name="from" id="from" value="{{$busorder->from}}">
                        </div>
                        <div class="bf-col-6">
                            <p>Destination To</p>
                            <input type="text" name="to" id="to" value="{{$busorder->to}}">
                        </div>
                    </div>

                    <div class="row">
    
                         <div class="col-6">
                            <p>Select Bus Type</p>
                            <select name="price">
                                <option value="{{$busorder->price}}">{{$busorder->price}}</option>
                                <option value="400">Non AC 400 BDT </option>
                                <option value="800">AC 800 BDT</option>
    
                            </select>
                        </div>
                        <div class="col-6">
                            <p>Number of Seat</p>
                            <input type="number" name="seat" id="seat" value="{{$busorder->seat}}">
                        </div>
                    </div>
    
    
                    <div class="row">
                        <div class="col-3">
                            <input type="submit" value="Update">
                        </div>
    
                    </div>
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection