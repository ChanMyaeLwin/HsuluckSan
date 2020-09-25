@extends('layouts.app')

@section('content')
<div class='row'>
<div class='col-lg-12 margin-tb'>
<div class='pull-left'>
<h2> Show ticket</h2>
</div>
<div class='pull-right'>
<a class='btn btn-primary' href='{{ route("tickets.index") }}'> Back</a>
</div>
</div>
</div>

<div class='row'>
<div class='col-xs-12 col-sm-12 col-md-12'>
<div class='form-group'>
<strong>Name:</strong>
{{ $ticket->name }}
</div>
</div>

</div>
<p class='text-center text-primary'><small>Developed by 6b ICT Solutions</small></p>
@endsection