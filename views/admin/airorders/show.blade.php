@extends('admin.layouts.master')
@section('title','Air Order Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Air Order Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Air Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('airorders.index') }}"> Back</a>
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
                    <th>Phone</th>
                    <th>Vat</th>
                    <th>From</th>
                    <th>To </th>
                    <th>Reparture</th>
                    <th>Return</th>
                    <th>Price</th>
                    <th>Seat </th>    
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$airorder->useremail}}</td>
                        <td>{{ $airorder->name }}</td>
                        <td>{{ $airorder->email }}</td>
                        <td>{{ $airorder->phone }}</td>
                        <td>{{ $airorder->vat }}</td>
                        <td>{{ $airorder->from }}</td>
                        <td>{{ $airorder->to }}</td>
                        <td>{{ $airorder->departure }}</td>
                        <td>{{ $airorder->return }}</td>
                        <td>{{ $airorder->price }}</td>
                        <td>{{ $airorder->seat }}</td>
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