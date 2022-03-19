
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
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>515555555555555555555555555</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>111</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>113</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>515555555555555555555555555</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>
                <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>515555555555555555555555555</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm ">show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>
              <tr class="">
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>515555555555555555555555555</td>
                    <td>2008/11/13</td>
                    <td>2008/11/13</td>
                    <td>
                        <a class="btn btn-success btn-sm " >show</a>
                        <a class="btn btn-primary btn-sm ">edite</a>
                    </td>
                </tr>

            </tbody>
            </table>
          </div>
    </div>
</main>

 @endsection
