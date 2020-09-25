@extends('layouts.master')

@section('content')
  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="container" >
      <div class="tm-search-form-container" style='margin: 50px'>
        <form action="index.html" method="GET" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">Find Ticket</div>
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Type your Ticket No ...">
            <input type="submit" value="Search" class="form-control tm-search-submit">
          </div>
          <div class="form-group tm-advanced-box">
            <a href="#" class="tm-text-white">Go Advanced ...</a>
          </div>
        </form>
      </div>

      <table class='table table-bordered'>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width='280px'>Action</th>
    </tr>
    @foreach ($tickets as $key => $ticket)
    <tr>
    <td>{{ $ticket->name }}</td>
    <td>
        <a class='btn btn-info' href='{{ route("tickets.show",$ticket->id) }}'>Show</a>
        <!-- @can('role-edit') -->
        <a class='btn btn-primary' href='{{ route("tickets.edit",$ticket->id) }}'>Edit</a>
        <!-- @endcan
        @can('role-delete') -->
        {!! Form::open(['method' => 'DELETE','route' => ['tickets.destroy', $ticket->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <!-- @endcan -->
    </td>
    </tr>
    @endforeach
</table>


      <footer class="row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2018</span> Your Company Name 
          
          - Design:  Tooplate</p>
        </div>
      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script><!-- https://jquery.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
@endsection