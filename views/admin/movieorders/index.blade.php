@extends('admin.layouts.master')
@section('title','Movie Orders')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Movie Orders</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Movie Orders</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Movie Orders</li>
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
                    <th>Movie Type</th>
                    <th>Number Of Seat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($movieorders as $movieorder)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$movieorder->useremail}}</td>
                        <td>{{ $movieorder->name }}</td>
                        <td>{{ $movieorder->email }}</td>
                        <td>{{ $movieorder->date }}</td>
                        <td>{{ $movieorder->phone }}</td>
                        <td>{{ $movieorder->price }}</td>
                        <td>{{ $movieorder->seat }}</td>
                        <td>
                            <form action="{{ route('movieorders.destroy',$movieorder->id) }}" method="Post">
                                <a class="btn btn-primary" style="padding: 1px 6px;" href="{{ route('movieorders.edit',$movieorder->id) }}">Edit</a>
                                <a class="btn btn-secondary" style="padding: 1px 6px;" href="{{ route('movieorders.show',$movieorder->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="padding: 1px 6px;" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $movieorders->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection