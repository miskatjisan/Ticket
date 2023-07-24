@extends('admin.layouts.master')
@section('title','Air Order Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Air Order Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Air Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('airorders.index') }}">Back</a>
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
        <form action="{{ route('airorders.update',$airorder->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="useremail"  value="{{$airorder->useremail}}" readonly>
                    <div class="row">
    
                        <div class="col-6">
                            <p>Your Name</p>
                            <input type="text" name="name" id="name" value="{{$airorder->name}}">
                        </div>
                        <div class="col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" value="{{$airorder->email}}">
                        </div>
    
                    </div>
    
    
    
                    <div class="row">
                        <div class="col-6">
                            <p>Phone Number </p>
                            <input type="tel" name="phone" id="phone" value="{{$airorder->phone}}">
                        </div>
                    </div>
    
                    <div class="col-6">
                        <p>Vat 10%</p>
                        <input type="text" name="vat" id="vat" value="0.1" readonly>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Flying From</p>
                            <input type="text" name="from" id="from" value="{{$airorder->from}}">
                        </div>
                        <div class="col-6">
                            <p>Flying To</p>
                            <input type="text" name="to" id="to" value="{{$airorder->to}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Departure</p>
                            <input type="date" name="departure" id="departure" value="{{$airorder->departure}}">
                        </div>
                        <div class="col-6">
                            <p>Return</p>
                            <input type="date" name="return" id="return" value="{{$airorder->return}}">
                        </div>
                    </div>

                    <div class="row">
    
                         <div class="col-6">
                            <p>Select Flight Type</p>
                            <select name="price">
                            <option value="{{$airorder->price}}">{{$airorder->price}}</option>
                                <option value="12000">Secound Class 12000 BDT </option>
                                <option value="22000">First Class 22000 BDT</option>
    
                            </select>
                        </div>
                        <div class="bf-col-6">
                            <p>Number of Seat</p>
                            <select name="seat" id="seat">
                                <option value="{{$airorder->seat}}">{{$airorder->seat}}</option>
                                <option value="1">Single</option>
                                <option value="2">Couple</option>
    
                            </select>
                        </div>
                    </div>
    
    
                    <div class="row">
                        <div class="bf-col-3">
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