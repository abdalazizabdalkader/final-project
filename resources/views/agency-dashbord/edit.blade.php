@extends('agency-dashbord.layout')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile Agency</h1>
        {{-- ////////////////////// --}}
        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            {{ $message }}
        </div>
        @endif
        @if (count($errors)>0)
        <ul>
            @foreach ($errors->all() as $item)
            <li>
                <div class="alert alert-danger" role="alert">
                   {{$item}}
                  </div>
            </li>

            @endforeach
        </ul>
        @endif
        <img src="/uploads/agency/{{$agency->photo}}" alt="non"
        class="img-thumbnail rounded" width="200" height="100">
        {{-- ///////////////////////// --}}
        <!-- start form -->
        <form action="{{ route('agency.update', ['id' => $agency->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label  for="exampleFormControlInput1"  class="form-label">Name</label>
                <input value='{{$agency->name}}' name='name' type="text" class="form-control w-25" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input value='' name='password' type="password" class="form-control w-25" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input value='{{$agency->email}}' name='email' type="email" class="form-control w-25" id="exampleFormControlInput1">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Edite photo</label>
                <input value='{{$agency->photo}}' name='photo' class="form-control w-50" name="photo" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <button class="btn btn-warning">Save change</button>
            </div>
        </form>

    </div>
@endsection
