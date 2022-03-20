@extends('admin-dashbord.layout')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Agencies</h1>
        <a href="{{route('admin.agency.add')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add </a>
        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            {{ $message }}
        </div>
        @endif
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>photo</th>
                        <th>name</th>
                        <th>email</th>
                        <th>subscribtion month</th>
                        <th>subscribtion end</th>
                        <th>date to join us</th>
                        <th>lat updata</th>
                        {{-- <th>available</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agencies as $agency)
                        <tr>
                            <td>
                                <img src="/uploads/agency/{{$agency->photo}}" alt="non"
                                class="img-thumbnail" width="100" height="100">
                            </td>
                            <td>{{$agency->name}}</td>
                            <td>{{$agency->email}}</td>
                            <td>{{$agency->subscription_month}} Months</td>
                            <td>{{$agency->end_subscription->diffForHumans()}}</td>
                            <td>{{$agency->created_at}}</td>
                            <td>{{$agency->updated_at}}</td>
                            {{-- <td>{{$agency->avilable ? 'avilable' : 'unavilable'}}</td> --}}
                            <td>
                                <a class="btn btn-primary btn-sm " href="{{route('agencyProfile',['id'=> $agency->id])}}">Show</a>
                                {{-- <form action="{{route('admin.unactive', ['id'=>$agency->id])}}" method="POST" enctype="multipart/form-data">@csrf
                                <button class="btn btn-danger  " name="unactive" value="{{!($agency->avilable)? 1: 0}}">Unavailabel</button></form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
