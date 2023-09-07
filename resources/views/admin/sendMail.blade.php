@extends('admin.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- /.col -->
            <div class="col-md-10">
                <form action="{{route('send_Mail')}}" method="post">
                    @csrf
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                              <div class="col-md-6">
                                <h3 class="card-title">Send Mail</h3>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end">
        
                              </div>  
                            </div>   
                    
                        </div>
                        @if ($errors->any())
                          @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" style="margin: 10px;width:fit-content;">
                              <span style="color: rgb(240, 240, 240); font-size:15px; ">{{$error}}</span>
                            </div>
                          @endforeach
                        @endif
                        @if (session('status'))
                          <h6 style="font-size:12px; max-width:fit-content; margin:20px !important;" class="alert alert-success">{{ session('status') }}</h6>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control" value="" name="email" placeholder="To:">
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="" name="subject" placeholder="subject:">
                            </div>
                            <div class="form-group">
                                <textarea id="compose-textarea" name="answer" class="form-control" style="height: 300px">
                                      
                                </textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">
                            <button type="submit" class="btn btn-primary">Send Mail</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection