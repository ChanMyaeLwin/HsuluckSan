@extends('layouts.master')

@section('content')
<div class="profile-box banner-p">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="profile-b">
                     <img src="img/lag-63.png" alt="#" />
                     <div class="dit-p">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                           <div class="profile-left-b">
                              <ul>
                                 <li><a href="#">Address </a></li>
                                 <li><a href="#">Phone No</a></li>
                                 <li><a href="#">Email</a></li>
                                 <li><a href="#">Join Date</a></li>
                              </ul>
                           </div>
                         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-profile-box">
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-4 pr">
                  <div class="profile-pro-left">
                     <div class="left-profile-box-m">
                        <div class="pro-img">
                           <img src="img/list-img-01.png" alt="#" />
                        </div>
                        <div class="pof-text">
                           <h3>{{ Auth::user()->name }}</h3>
                           <div class="check-box"></div>
                           <h3>Role</h3>
                        </div>
                        <a href="#">Call</a>
                        <p><img src="img/report-icon.jpg" alt="" />Report this user</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-sm-8">
                  <div class="profile-pro-right">
                     <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading clearfix">
                           <ul class="nav nav-tabs pull-left">
                              <li><a href="#tab1default" data-toggle="tab">About</a></li>
                              <li><a href="#tab2default" data-toggle="tab">Change Password</a></li>
                           </ul>
                          
                        </div>
                        <div class="panel-body">
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1default">
                                 <div class="about-box">
                                    <h2>What Does Chamb Do</h2>
                                    <p>Chamb brings buyers and suppliers of goods together to create lasting profitable relationships. Through new connections, economic roads, and insightful associations, we want Chamb to help transform your business into the next Apple!</p>
                                    <p>At Chamb we understand the old adage of ‘it’s not what you know, but Who you know’ is key to success. With that in mind, through much trial and just a little bit of error, we learned the one limiting factor of any business achieving its potential: Their connections.</p>
                                    <p>Before Chamb existed, we noticed that though the power of the net rested at business’ finger tips, resources for discovering manufacturers and suppliers was limited at best and non-existent at worse. Smaller companies that housed great products and potential, were starving through a lack of connectivity.</p>
                                    <p>We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website that helps discover and build profitable long-lasting networks amongst businesses around the world.</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="tab2default">
                              <div class="blue-form">
                                <form method="POST" action="{{ route('change_password') }}">
                                    @csrf
                                    <div class="form-inline">
                                    <h4>{{ __('Old Password') }}</h4>
                                        <input id="current-password" type="password" class="@error('current-password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-inline">
                                    <h4>{{ __('New Password') }}</h4>
                                        <input id="new-password" type="password" class="@error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new_password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-inline">
                                    <h4>{{ __('Confirm Password') }}</h4>
                                    <input id="password-confirm" type="password" class="form-control" name="confirm-password" required autocomplete="confirm-password" oninput="check(this)">

                                    </div>
                                    <div class="form-inline">
                                        <button type="submit" class="btn btn-primary">  {{ __('Change Password') }}</button>
                                    </div>
                                </form>
                                
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script language='javascript' type='text/javascript'>
        function check(input) {
            if (input.value != document.getElementById('new-password').value) {
                input.setCustomValidity('Password Must be Matching.');
            } else {
                // input is valid -- reset the error message
                input.setCustomValidity('');
            }
        }
    </script>
@endsection
