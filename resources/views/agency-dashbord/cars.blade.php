@extends('agency-dashbord.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Your Cars</h1>
            @if ($message = Session::get('success'))
                <div class="alert alert-primary">
                    {{ $message }}
                </div>
            @endif
            <a href="{{ route('agency.cars.create') }}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add
            </a>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>car id</th>
                            <th>name</th>
                            <th>created at</th>
                            <th>updated at</th>
                            <th>likes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>

                            <td>{{ $car->id }}</td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->created_at->diffForHumans() }}</td>
                            <td>{{ $car->updated_at->diffForHumans() }}</td>
                            <td>likes</td>
                            <td>
                                <a class="btn btn-success btn-sm ">show</a>
                                <a class="btn btn-primary btn-sm ">edite</a>
                                <form action="{{route('agency.unactive',['id' => $car->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-danger btn-sm " name="unactive" value="{{!($car->avilable)? 1: 0}}">unavailable</button></form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
