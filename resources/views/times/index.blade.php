@extends('layouts.app')

@section('content')
<div class='row'>
    <div class='col-lg-12 margin-tb'>
        <div class='pull-left'>
            <h2>times Management</h2>
        </div>
        <div class='pull-right'>
            <a class='btn btn-success' href='{{ route("times.create") }}'> Create New times</a>

        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class='alert alert-succes'>
    <p>{{ $message }}</p>
</div>
@endif

<table class='table table-bordered'>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width='280px'>Action</th>
    </tr>
    @foreach ($times as $key => $time)
    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $time->name }}</td>
    <td>
        <a class='btn btn-info' href='{{ route("times.show",$time->id) }}'>Show</a>
        <!-- @can('role-edit') -->
        <a class='btn btn-primary' href='{{ route("times.edit",$time->id) }}'>Edit</a>
        <!-- @endcan
        @can('role-delete') -->
        {!! Form::open(['method' => 'DELETE','route' => ['times.destroy', $time->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <!-- @endcan -->
    </td>
    </tr>
    @endforeach
</table>

{!! $times->render() !!}
    <p class='text-center text-primary'><small>Developed by 6b ICT Solutions</small></p>
@endsection