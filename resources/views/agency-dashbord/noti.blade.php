
 @extends('agency-dashbord.layout')
 @section('content')
 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Agency Notifications</h1>
        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            {{ $message }}
        </div>
        @endif
        <a href="{{route('agency.notify.add')}}" class="btn btn-success my-3"><i class="bi bi-plus-circle "></i> Add </a>

        <div class="card-body">
       @if ($notifications->count() > 0)
           @php
               $i = 1;
           @endphp
       @endif
            <table id="datatablesSimple">
              <thead>
                <tr>
                  {{-- <th>#</th> --}}
                  <th>title</th>
                  <th>description</th>
                  <th>Date</th>
                  {{-- <th>Actions</th> --}}

                </tr>
              </thead>
              <tbody>
                @foreach ($notifications as $item )
                <tr>
                    {{-- <th scope="row">{{$i++}}</th>  --}}
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->created_at->diffForHumans()}}</td>
                    {{-- <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#staticBackdrop'.'$i'}}">
                            hide
                          </button>
                    </td> --}}
                    <div class="modal fade" id="{{'staticBackdrop'.'$i'}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">{{$item->title}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              {{$item->description}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>



                    @endforeach
                </tr>
              </tbody>
            </table>
            <!-- Modal -->

            {{-- <div class="modal fade" id="{{'staticBackdrop'.'$i'}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">{{$item->title}}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      {{$item->description}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>  --}}


{{-- end modal  --}}
          </div>
    </div>
</main>

 @endsection
