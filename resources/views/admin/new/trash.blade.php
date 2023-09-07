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
                    <h5 class="card-title">
                        <span style="font-size:15px;">News that are in trash are automatically deleted after 24 hours !!</span></h5>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('news')}}">Back</a>
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
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($latests as $latest)
                        <tr>
                            <td class="size">{{$latest->id}}</td>
                            <td class="size">{{$latest->title}}</td>
                            <td class="size" style="width: 10%;">
                                <img src="{{asset($latest->image)}}" alt="" width="100%">
                            </td>
                            <td class="size">{{$latest->description}}</td>
                            <td class="size">
                                <a href="{{route('restoreNews',$latest->id)}}" class="btn btn-primary">Restore</a>
                                <a href="{{route('deleteNewsPermanent',$latest->id)}}" class="btn btn-danger">Delete Permanent</a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
</div> 
@endsection