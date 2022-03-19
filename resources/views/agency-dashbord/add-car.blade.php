@extends('agency-dashbord.layout')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Car</h1>

        <a class="btn btn-dark  order-2 order-lg-5 my-3 me-lg-0 text-light" href="{{ route('agency.cars') }}">
            <i class="bi bi-arrow-left-square"></i> Back
        </a>

        <!-- start form -->
        <form action="{{ route('agency.cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control w-25" name="name" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Brand</label>
                <select name="barnd" class="form-select w-25" aria-label="Default select example">
                    @foreach ($brands as $brand )
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Color</label>
                <select name="color" class="form-select w-25" aria-label="Default select example">
                    @foreach ($colors as $color )
                    <option value="{{$color->id}}">{{$color->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">type</label>
                <select name="type" class="form-select w-25" aria-label="Default select example">
                    @foreach ($types as $type )
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Country</label>
                <select name="country" class="form-select w-25" aria-label="Default select example">
                    @foreach ($countries as $country )
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">cylinders</label>
                <select name="cylinders" class="form-select w-25" aria-label="Default select example">
                    @for ($i=3; $i <= 16; $i++)
                    <option value='{{$i}}'>{{$i}} cylinders </option>
                    @endfor
                </select>
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Runing volume</label>
                <input name='running_volume' type="number" class="form-control w-25" id="exampleFormControlInput1">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">HoursePower</label>
                <input name='horsepower' type="number" class="form-control w-25" id="exampleFormControlInput1">
            </div>

            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">consumption</label>
                <input name='consumption' type="text" class="form-control w-25" id="exampleFormControlInput1">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">price</label>
                <input name='price' type="text" class="form-control w-25" id="exampleFormControlInput1">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Chose phots</label>
                <input required type="file" class="form-control" name="image[]" multiple>
            </div>

            {{-- photos --}}
            {{-- <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Photo</label>
                <input class="form-control w-50" name="photo" type="file" id="formFile">
            </div> --}}

            {{-- <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/details">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Chose phots</label>
                <input required type="file" class="form-control" name="image[]" multiple>
                <label for="exampleFormControlInput1" class="form-label">chose car</label>
                <select name="car_id" class="form-select w-25" aria-label="Default select example">
                    @foreach ($cars as $car )
                    <option value="{{$car->id}}">{{$car->name}}</option>
                    @endforeach
                </select>
            </div>
            </form> --}}

            <div class="mb-3">
                <button class="btn btn-warning">Add</button>
            </div>
    </div>
    </form>
@endsection
