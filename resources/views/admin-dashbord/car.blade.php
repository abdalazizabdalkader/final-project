
 @extends('admin-dashbord.layout')
 @section('content')
 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cars</h1>
        <a href="{{route('admin.carSetting')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Settings </a>
        <div class="card-body">
            <table id="datatablesSimple">
              <thead>
                <tr>
                  <th>name</th>
                  <th>car id</th>
                  <th>agency</th>
                  <th>created at</th>
                  <th>updated at</th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody>
                  @foreach ($cars as $car )
                      
                  <tr >
                      <td>{{$car->name}}</td>
                      <td>{{$car->id}}</td>
                      <td>{{$car->agency->name}}</td>
                      <td>{{$car->careated_at}}</td>
                      <td>{{$car->updated_at}}</td>
                      <td>
                          <a class="btn btn-success btn-sm " href="{{route('details',['id'=>$car->id])}}">show</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
          </div>
    </div>
</main>

 @endsection
