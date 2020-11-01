@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">time Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">time Management</li>
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
                <h3 class="card-title">Show time</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    {{ $time->name }}
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class='btn btn-secondary' href='{{ route('times.index') }}'> Back</a>
                </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
<div class='row'>
<div class='col-lg-12 margin-tb'>
<div class='pull-left'>
<h2> Show time</h2>
</div>
<div class='pull-right'>
<a class='btn btn-primary' href='{{ route("times.index") }}'> Back</a>
</div>
</div>
</div>

<div class='row'>
<div class='col-xs-12 col-sm-12 col-md-12'>
<div class='form-group'>
<strong>Name:</strong>
{{ $time->name }}
</div>
</div>

</div>
<p class='text-center text-primary'><small>Developed by 6b ICT Solutions</small></p>
@endsection