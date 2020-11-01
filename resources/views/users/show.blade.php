@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show User</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    {{ $user->name }}
                  </div>
                  <div class="form-group">
                    <label for="Name">Name</label>
                    {{ $user->email }}
                  </div>
                  <div class="form-group">
                    <label for="Roles">Roles</label>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class='badge badge-success'>{{ $v }}</label>
                        @endforeach
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class='btn btn-secondary' href='{{ route('users.index') }}'> Back</a>
                </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
</div>
@endsection
