@extends('admin.dashboard')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="card-title">Contact that are in trash are automatically deleted after 24 hours !</h3>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-danger mx-1" href="{{route('adminContact')}}">Back</a>
                  </div>  
                </div>            
              </div>
                @if (session('status'))
                    <h6 style="font-size:12px; max-width:fit-content; margin:20px !important;" class="alert alert-success">{{ session('status') }}</h6>
                @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Queries</th>
                    <th>Reply</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td class="size">{{$contact->name}}</td>
                        <td class="size">{{$contact->email}}</td>
                        <td class="size">{{$contact->textarea}}</td>
                        <td class="size">{{$contact->answer}}</td>
                        <td>
                            <a href="{{url('restore/'.$contact->id)}}" class="btn btn-primary size">Restore</a>
                            <a href="{{route('deletePermanent',$contact->id)}}" class="btn btn-danger size">Delete</a>
                        </td>
                    </tr>            
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div> 
@endsection