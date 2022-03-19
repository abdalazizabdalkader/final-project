
 @extends('admin-dashbord.layout')
 @section('content')
 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Requests</h1>
        <div class="card-body">
            <table id="datatablesSimple">
              <thead>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>Phone</th>
                  <th>date </th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody>
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>0999999999</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-primary btn-sm ">accept</a>
                        <a class="btn btn-danger btn-sm ">delete</a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</main>

 @endsection
