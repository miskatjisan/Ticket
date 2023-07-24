@extends('admin.layouts.master')
@section('title','Air Payment')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Air Payment</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Air Payment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Air Payment</li>
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
                @foreach ($airpayments as $airpayment)
                    <tr>
                        <td>{{$airpayment->id}}</td>
                        <td>{{$airpayment->useremail}}</td>
                        <td>{{ $airpayment->name }}</td>
                        <td>{{ $airpayment->email }}</td>
                        <td>{{ $airpayment->address }}</td>
                        <td>{{ $airpayment->city }}</td>
                        <td>{{ $airpayment->state }}</td>
                        <td>{{ $airpayment->zip }}</td>
                        <td>{{ $airpayment->total }}</td>
                        <td>{{ $airpayment->creditnumber }}</td>
                        <td>{{ $airpayment->expmonth }}</td>
                        <td>{{ $airpayment->expyear }}</td>
                        <td>{{ $airpayment->cvv }}</td>
                        <td>
                            <form action="{{ route('airpayments.destroy',$airpayment->id) }}" method="Post">
                                <a style="padding: 1px 6px;" class="btn btn-primary" href="{{ route('airpayments.edit',$airpayment->id) }}">Edit</a>
                                <a style="padding: 1px 6px;" class="btn btn-secondary"  href="{{ route('airpayments.show',$airpayment->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button style="padding: 1px 6px;" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $airpayments->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection