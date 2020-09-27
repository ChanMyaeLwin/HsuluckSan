@extends('layouts.app')

@section('content')
<div class='row'>
<div class='col-lg-12 margin-tb'>
<div class='pull-left'>
<h2>Buy ticket</h2>
</div>
<div class='pull-right'>
<a class='btn btn-primary' href='{{ route("welcome") }}'> Back</a>
</div>
</div>
</div>

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

{!! Form::model($ticket, ['method' => 'post','route' => ['tickets.buynow', $ticket->id]]) !!}
<div class='row'>
<div class='ol-xs-12 col-sm-12 col-md-12'>
<div class='form-group'>
<strong>Name:</strong>
{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','readonly')) !!}
</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 text-center'>
<button type='submit' class='btn btn-primary'>ဝယ်မည်</button>
</div>
</div>
{!! Form::close() !!}

<p class='text-center text-primary'><small>Developed by 6b ICT Solutions</small></p>
@endsection