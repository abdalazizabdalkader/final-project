@extends('admin-dashbord.layout')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Notifications</h1>
        <a class="btn btn-dark  order-2 order-lg-5 my-3 me-lg-0 text-light"  href="{{route('admin.notify')}}">
            <i class="bi bi-arrow-left-square"></i> Back
        </a>

        <!-- start form -->
        <form action="{{ route('admin.notifyStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name='title' class="form-control w-25" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Send to</label>
            <!-- <input type="email" class="form-control w-25" id="exampleFormControlInput1" > -->
            <select class="form-select w-25" name="agency" aria-label="Default select example">
                <option selected>Select Agency</option>
                @foreach ($agencies as $agency)
                    <option value='{{$agency->id}}'> {{$agency->name}}</option>
                @endforeach
              </select>
          </div>
          <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea class="form-control w-75" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <button class="btn btn-warning">Send</button>
          </div>
        </form>
    </div>

@endsection
