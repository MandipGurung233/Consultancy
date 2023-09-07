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
                    <a class="btn btn-danger mx-1" href="{{route('trashContact')}}">Sent</a>
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
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Queries</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact)
                        <x-admin.contact :contact="$contact"/>                   
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