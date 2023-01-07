@extends('admin.layouts.master')
@section('title','Air Payment Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Air Payment Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Air Payment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('airpayments.index') }}">Back</a>
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
        <form action="{{ route('airpayments.update',$airpayment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="useremail" value="{{$airpayment->useremail}}">
                    <div class="row">
    
                        <div class="col-6">
                            <p>Your Name</p>
                            <input type="text" name="name" id="name" value="{{$airpayment->name}}">
                        </div>
                        <div class="col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" value="{{$airpayment->email}}">
                        </div>
    
                    </div>

                    <div class="row">
    
                        <div class="col-6">
                            <p>Address</p>
                            <input type="text" name="address" id="address" value="{{$airpayment->address}}">
                        </div>
                        <div class="col-6">
                            <p>City</p>
                            <input type="text" name="city" id="city" value="{{$airpayment->city}}">
                        </div>
    
                    </div>

                    <div class="row">
    
                    <div class="col-6">
                            <p>State</p>
                            <select name="state">
                                <option value="{{$airpayment->state}}">{{$airpayment->state}}</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Khulna">Khulna</option>
    
                            </select>
                        </div>

                        <div class="col-6">
                            <p>Zip code</p>
                            <input type="text" name="zip" id="zip" value="{{$airpayment->zip}}">
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col-6">
                            <p>Total Purchase Amount</p>
                            <input type="number" name="total" id="total" value="{{$airpayment->total}}" readonly>
                        </div>
                        <div class="col-6">
                            <p>Credit card number</p>
                            <input type="text" name="creditnumber" id="creditnumber" value="{{$airpayment->creditnumber}}">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <p>Exp month</p>
                            <input type="text" name="expmonth" id="expmonth" value="{{$airpayment->expmonth}}">
                        </div>

                         <div class="col-6">
                            <p>Exp year</p>
                            <select name="expyear">
                                <option value="{{$airpayment->expyear}}">{{$airpayment->expyear}}</option>
                                <option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
    
                            </select>
                        </div>
                       
                    </div>
                    <div class="row">
    
                        <div class="col-6">
                        <p>CVV</p>
                            <input type="text" name="cvv" id="cvv" value="{{$airpayment->cvv}}">
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