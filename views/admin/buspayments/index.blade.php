@extends('admin.layouts.master')
@section('title','Bus Payment')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Bus Payment</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bus Payment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Bus Payment</li>
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
                @foreach ($buspayments as $buspayment)
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
                        <td>
                            <form action="{{ route('buspayments.destroy',$buspayment->id) }}" method="Post">
                                <a class="btn btn-primary" style="padding: 1px 6px;" href="{{ route('buspayments.edit',$buspayment->id) }}">Edit</a>
                                <a class="btn btn-secondary" style="padding: 1px 6px;" href="{{ route('buspayments.show',$buspayment->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="padding: 1px 6px;" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $buspayments->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection