@extends('admin.layouts.master')
@section('title','Air Orders')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Air Orders</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Air Orders</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Air Orders</li>
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
                    <th>Phone</th>
                    <th>Vat</th>
                    <th>From</th>
                    <th>To </th>
                    <th>Reparture</th>
                    <th>Return</th>
                    <th>Price</th>
                    <th>Seat </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($airorders as $airorder)
                    <tr>
                        <td>{{$i++}}</td>
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
                        <td>
                            <form action="{{ route('airorders.destroy',$airorder->id) }}" method="Post">
                                <a class="btn btn-primary;" style="padding: 1px 6px;" href="{{ route('airorders.edit',$airorder->id) }}">Edit</a>
                                <a class="btn btn-secondary" style="padding: 1px 6px;" href="{{ route('airorders.show',$airorder->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 1px 6px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $airorders->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection