@extends('admin.layouts.master')
@section('title','Bus Orders')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Bus Orders</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bus Orders</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Bus Orders</li>
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
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Bus Type</th>
                    <th>Number Of Seat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($busorders as $busorder)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$busorder->useremail}}</td>
                        <td>{{ $busorder->name }}</td>
                        <td>{{ $busorder->email }}</td>
                        <td>{{ $busorder->date }}</td>
                        <td>{{ $busorder->phone }}</td>
                        <td>{{ $busorder->price }}</td>
                        <td>{{ $busorder->seat }}</td>
                        <td>
                            <form action="{{ route('busorders.destroy',$busorder->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('busorders.edit',$busorder->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('busorders.show',$busorder->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $busorders->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection