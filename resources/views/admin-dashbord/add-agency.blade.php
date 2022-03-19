
@extends('admin-dashbord.layout')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Agency</h1>
        <a class="btn btn-dark  order-2 order-lg-5 my-3 me-lg-0 text-light"  href="{{route('admin.agency')}}">
            <i class="bi bi-arrow-left-square"></i> Back
        </a>

        <!-- start form -->
        <form action="{{ route('admin.agency.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" name='name' id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subsecribtion Month</label>
            <select class="form-select w-25" name='subscription_month' aria-label="Default select example">

               @for ($i=1; $i <= 12;$i++)
                <option value='{{$i}}'>{{$i.' Months'}}</option>
               @endfor
              </select>
          </div>
          <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">password</label>
            <input type="password" name='password' class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Photo</label>
            <input class="form-control w-50" name="photo" type="file" id="formFile">
          </div>


          <div class="mb-3">
            <button class="btn btn-warning">save</button>
          </div>
        </form>
    </div>

@endsection
