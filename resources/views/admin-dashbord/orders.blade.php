
 @extends('admin-dashbord.layout')
 @section('content')
 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Orders</h1>
        {{-- <a href="{{route('add-cars')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add </a> --}}

        <div class="card-body">
            <table id="datatablesSimple">
              <thead>
                <tr>
                  <th>car id</th>
                  <th>Agency </th>
                  <th>customer name</th>
                  <th>customer id</th>
                  <th>status</th>
                  <th>created at</th>

                </tr>
              </thead>
              <tbody>
                <tr class="">
                    <td> 12</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh xx</td>
                    <td>55</td>
                    <td>pandding</td>
                    <td>2008/11/13</td>

                </tr>



            </tbody>
            </table>
          </div>
    </div>
</main>

 @endsection
