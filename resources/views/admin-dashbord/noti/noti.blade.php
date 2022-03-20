
 @extends('admin-dashbord.layout')
 @section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Notifications</h1>
        <a href="{{route('admin.notify.add')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add </a>
        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            {{ $message }}
        </div>
        @endif
        <div class="card-body">
            <table id="datatablesSimple">
              <thead>
                <tr>
                  <th>title</th>
                  <th>from</th>
                  <th>to</th>
                  <th>Date</th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody>
                  @foreach ($notifications as $notify )
                 
                  <tr >
                    <td>{{$notify->title}}</td>
                    
                    @if ($notify->from == 1)
                    <td>{{$notify->agency->name}}</td>
                   @else
                   <td>{{($notify->admin->first_name).' '.($notify->admin->last_name)}}</td>

                   @endif

                   @if ($notify->from == 1)
                   <td>{{($notify->admin->first_name).' '.($notify->admin->last_name)}}</td>
                   @else
                   <td>{{$notify->agency->name}}</td>
                  @endif
                   {{-- <td>{{$notify->}}</td> --}}
                    <td>{{$notify->created_at->diffForHumans()}}</td>
                    {{-- <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Show
                          </button>
                        {{-- <a class="btn btn-danger btn-sm ">hide</a> --}}

                    </td> --}}
                </tr>
                  @endforeach
                
              </tbody>
            </table>
<!-- Modal -->
  {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Notification title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
{{-- end modal  --}}
          </div>
    </div>

 @endsection
