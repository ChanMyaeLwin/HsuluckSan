@extends('layouts.master')

@section('content')
  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">
    <div class="tm-welcome-section">
      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
            <img src="{{ asset('img/SLS-Logo.png') }}" alt="Image" class="img-logo">
          <!-- <h1 class="text-uppercase mb-3 tm-site-name">Hsu Luck San</h1>
          <p class="tm-site-description">New HTML Website Template</p> -->
        </div>
      </div>

    </div>

    <div class="container">
      <div class="tm-search-form-container">
      {!! Form::open(array('route' => 'tickets.search','method'=>'POST','class'=>'form-inline tm-search-form')) !!}
          <div class="text-uppercase tm-new-release">Find Ticket</div>
          <div class="form-group tm-search-box">
            <input type="text" name="ticket_no" class="form-control tm-search-input" placeholder="Type your Ticket No ...">
            <input type="submit" value="Search" class="form-control tm-search-submit">
          </div>
          <div class="form-group tm-advanced-box">
            <a href="#" class="tm-text-white">Go Advanced ...</a>
          </div>
          {!! Form::close() !!}
      </div>


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