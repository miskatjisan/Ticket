@extends('admin.layouts.master')
@section('title','Movie Order Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Movie Order Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Movie Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('movieorders.index') }}"> Back</a>
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
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Movie Type</th>
                    <th>Number Of Seat</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$movieorder->useremail}}</td>
                        <td>{{ $movieorder->name }}</td>
                        <td>{{ $movieorder->email }}</td>
                        <td>{{ $movieorder->date }}</td>
                        <td>{{ $movieorder->phone }}</td>
                        <td>{{ $movieorder->price }}</td>
                        <td>{{ $movieorder->seat }}</td>
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