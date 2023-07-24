@extends('admin.layouts.master')
@section('title','Movie Order Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Movie Order Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Movie Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('movieorders.index') }}">Back</a>
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
        <form action="{{ route('movieorders.update',$movieorder->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="useremail" value="{{$movieorder->useremail}}">
                    <div class="row">
    
                        <div class="col-6">
                            <p>Your Name</p>
                            <input type="text" name="name" id="name" value="{{$movieorder->name}}">
                        </div>
                        <div class="col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" value="{{$movieorder->email}}">
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col-6">
                            <p>Select Date</p>
                            <input type="date" name="date" id="date" value="{{$movieorder->date}}">
                        </div>
                        <div class="col-6">
                            <p>Phone Number </p>
                            <input type="tel" name="phone" id="phone" value="{{$movieorder->phone}}">
                        </div>
                    </div>

                    <div class="bf-row">
                    <div class="bf-col-6">
                            <p>Select Your Cineplex</p>
                            <select name="cineplex">
                                <option>Select One</option>
                                <option value="Shena">Shena</option>
                                <option value="Boshundhora">Boshundhora </option>
                                <option value="Sony">Sony</option>
                                <option value="Shemoly">Shemoly</option>
                            </select>
                        </div>
                        </div>

                    <div class="row">
    
                         <div class="col-6">
                            <p>Select Movie Hall Type</p>
                            <select name="price">
                                <option value="{{$movieorder->price}}">{{$movieorder->price}}</option>
                                <option value="400">Non AC 400 BDT </option>
                                <option value="800">AC 800 BDT</option>
    
                            </select>
                        </div>
                        <div class="bf-col-6">
                            <p>Number of Seat</p>
                            <select name="seat" id="seat">
                                <option value="{{$movieorder->seat}}">{{$movieorder->seat}}</option>
                                <option value="1">Single</option>
                                <option value="2">Couple</option>
    
                            </select>
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