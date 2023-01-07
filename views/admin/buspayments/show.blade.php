@extends('admin.layouts.master')
@section('title','Bus Payment Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Bus Payment Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bus Payment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('buspayments.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
            <tr>
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
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$buspayment->id}}</td>
                        <td>{{$buspayment->useremail}}</td>
                        <td>{{ $buspayment->name }}</td>
                        <td>{{ $buspayment->email }}</td>
                        <td>{{ $buspayment->address }}</td>
                        <td>{{ $buspayment->city }}</td>
                        <td>{{ $buspayment->state }}</td>
                        <td>{{ $buspayment->zip }}</td>
                        <td>{{ $buspayment->total }}</td>
                        <td>{{ $buspayment->creditnumber }}</td>
                        <td>{{ $buspayment->expmonth }}</td>
                        <td>{{ $buspayment->expyear }}</td>
                        <td>{{ $buspayment->cvv }}</td>
                    </tr>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection