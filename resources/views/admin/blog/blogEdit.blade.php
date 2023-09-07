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
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                              <div class="col-md-6">
                                <h3 class="card-title">Edit Blog</h3>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end">
                                <a class="btn btn-success mx-1" href="{{route('blog')}}">Back</a>
        
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
                
                        <form action="{{route('blogUpdate',$blogs->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                <input class="form-control" value="{{$blogs->blogTitle}}" name="blogTitle" placeholder="Title">
                                </div>
                                <div class="div" style="margin-bottom: 10px;">
                                    <img style="width: 100px" src="{{asset($blogs->blogImage)}}" alt=""/>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="blogImage">
                                </div>
                                <div class="form-group">
                                    <textarea id="compose-textarea" name="blogCompose" value="{{$blogs->blogCompose}}" class="form-control" style="height: 300px">
                                        {{$blogs->blogCompose}}
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                                </svg>&nbsp;Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
               
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection