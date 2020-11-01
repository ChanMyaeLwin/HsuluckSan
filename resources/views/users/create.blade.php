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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Create User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if (count($errors) > 0)
                <div class='alert alert-danger'>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
              {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <label for="ConfirmPassword">Confirm Password</label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <label for="Roles">Roles</label>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create</button>
                  <a class='btn btn-secondary' href='{{ route('tickets.index') }}'> Back</a>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection



