
 @extends('agency-dashbord.layout')
 @section('content')
 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Your Orders</h1>
        {{-- <a href="{{route('add-cars')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add </a> --}}

        <div class="card-body">
            <table id="datatablesSimple">
              <thead>
                <tr>
                  <th>car id</th>
                  <th>customer name</th>
                  <th>customer id</th>
                  <th>status</th>
                  <th>created at</th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody>
                <tr class="">
                    <td> 12</td>
                    <td>Edinburgh</td>
                    <td>55</td>
                    <td>pandding</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show car</a>
                        <a class="btn btn-primary btn-sm ">accept</a>
                        <a class="btn btn-primary btn-sm ">ignore</a>
                    </td>
                </tr>



            </tbody>
            </table>
          </div>
    </div>
</main>

 @endsection
