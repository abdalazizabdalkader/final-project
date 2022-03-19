@extends('admin-dashbord.layout')
@section('content')
    <div class="container-fluid px-4">
        <a class="btn btn-dark  order-2 order-lg-5 my-3 me-lg-0 text-light" href="{{ route('admin.cars') }}">
            <i class="bi bi-arrow-left-square"></i> Back
        </a>
        @if ($message = Session::get('success'))
            <div class="alert alert-primary">
                {{ $message }}
            </div>
        @endif
        <h1 class="mt-4">Cars Settings</h1>
        <!-- start form -->
        <form action="{{ route('admin.addBrande') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Brand</label>
                <div class="row row-cols-2">
                    <input type="text" name="name" class="form-control col w-25 " id="exampleFormControlInput1">
                    <button class="btn btn-warning ms-2" style="width: 50px">Add</button>
                </div>
            </div>
        </form>

        <form action="{{route('admin.addColore')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">color</label>
                <div class="row row-cols-2">
                    <input type="text" name="name" class="form-control col w-25 " id="exampleFormControlInput1">
                    <button class="btn btn-warning ms-2" style="width: 50px" >Add</button>
                </div>
            </div>
        </form>

        <form action="{{route('admin.addType')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">type</label>
                <div class="row row-cols-2">
                    <input type="text" name="name" class="form-control col w-25 " id="exampleFormControlInput1">
                    <button class="btn btn-warning ms-2" style="width: 50px">Add</button>
                </div>
            </div>
        </form>

        <form action="{{route('admin.addCountry')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">country</label>
                <div class="row row-cols-2">
                    <input type="text" class="form-control col w-25" name="name" id="exampleFormControlInput1">
                    <button class="btn btn-warning ms-2"  style="width: 50px">Add</button>
                </div>
            </div>
        </form>

        <hr>

        {{-- <h2 class="mt-4">add subscribtion</h2>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Type subscribtion</label>
            <div class="row row-cols-2">
                <input type="text" class="form-control col w-25" name="type" id="exampleFormControlInput1">
                <button class="btn btn-warning ms-2" style="width: 50px">Add</button>
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">price subscribtion</label>
                <div class="row row-cols-2">
                    <input type="number" class="form-control col w-25" name="price" id="exampleFormControlInput1">
                    <button class="btn btn-warning ms-2" style="width: 50px">Add</button>
                </div>
            </div> --}}
        @endsection
