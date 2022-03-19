@extends('admin-dashbord.layout')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
{{-- ////////////////////// --}}
{{-- <img src="imgs/img.jpg" alt="avatar" class="rounded" > --}}

{{-- ///////////////////////// --}}
        <!-- start form -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First Name</label>
            <input type="email" class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
            <input type="email" class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          {{-- <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Edite photo</label>
            <input class="form-control w-50" name="photo" type="file" id="formFile">
          </div> --}}

          <div class="mb-3">
            <button class="btn btn-warning">Save change</button>
          </div>
    </div>

@endsection
