@extends('layouts.master')

@section('content')
<div class='row'>
    <div class='col-lg-12 margin-tb'>
        <div class='pull-left'>
            <h2>My Tickets</h2>
        </div>
        <div class='pull-right'>
            <!-- <a class='btn btn-success' href='{{ route("tickets.create") }}'> Back</a> -->
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
    </tr>
    @foreach ($tickets as $key => $ticket)
    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $ticket->name }}</td>
    </tr>
    @endforeach
</table>

{!! $tickets->render() !!}
    <p class='text-center text-primary'><small>Developed by 6b ICT Solutions</small></p>
@endsection