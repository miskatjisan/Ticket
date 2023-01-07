@extends('admin.layouts.master')
@section('title','Movie Payment')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Movie Payment</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Movie Payment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Movie Payment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
         
            <div class="ecommerce-widget">
                <div class="card">
                    <div class="card-body">

                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>User Email</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip code</th>
                    <th>Total Amount</th>
                    <th>Credit card number</th>
                    <th>Exp month</th>
                    <th>Exp year</th>
                    <th>CVV</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moviepayments as $moviepayment)
                    <tr>
                        <td>{{$moviepayment->id}}</td>
                        <td>{{$moviepayment->useremail}}</td>
                        <td>{{ $moviepayment->name }}</td>
                        <td>{{ $moviepayment->email }}</td>
                        <td>{{ $moviepayment->address }}</td>
                        <td>{{ $moviepayment->city }}</td>
                        <td>{{ $moviepayment->state }}</td>
                        <td>{{ $moviepayment->zip }}</td>
                        <td>{{ $moviepayment->total }}</td>
                        <td>{{ $moviepayment->creditnumber }}</td>
                        <td>{{ $moviepayment->expmonth }}</td>
                        <td>{{ $moviepayment->expyear }}</td>
                        <td>{{ $moviepayment->cvv }}</td>
                        <td>
                            <form action="{{ route('moviepayments.destroy',$moviepayment->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('moviepayments.edit',$moviepayment->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('moviepayments.show',$moviepayment->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $moviepayments->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection