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
                    <h3 class="card-title">Contacts</h3>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-warning mx-1" href="{{route('adminContact')}}">Back</a>
                    <a class="btn btn-danger mx-1" href="{{route('trashContact')}}">Sent</a>
                  </div>
                </div>
               
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('contactDestroy',$id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <div class="form-group">
                      <label class="form-label size">To: </label>
                      <input class="size" name="email" value="{{$email}}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label size">Subject: </label>
                    <input  name="subject">
                  </div>
                  <div class="form-group">
                      <label class="form-label size">Query: </label>
                      <textarea name="query" col="10" rows="5" class="form-control" readonly>{{$query}}</textarea>
                
                  </div>
                 
                  <div class="form-group">
                      <label class="form-label size">Answer</label>
                      <textarea  name="answer" col="20" rows="8" class="form-control">{{$reply}}</textarea>            
                  </div>
                  <div class="for-group mt-3">
                      <button class="btn btn-primary">Send</button>
                  </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
</div> 
@endsection