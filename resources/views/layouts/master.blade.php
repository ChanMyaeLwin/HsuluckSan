<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>ဆုလာဘ်စံ - အွန်လိုင်းထီဆိုင်</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{ route('welcome') }}" class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
                     </div>
                     
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>ဘာသာစကားပြောင်းရန်</span> <img src="img/flag.png" alt="" /> </a> </li>
                                 <li> <a href="#"><img class="h-i" src="img/help-icon.png" alt="" /> အကူအညီ </a> </li>
                                 @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ဝင်ရန်') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="custom-b" href="{{ route('register') }}">{{ __('စာရင်းသွင်းရန်') }}</a>
                                    </li>
                                @endif
                                @else
                                
                                 <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          Manage
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <ul>
                                          <li>
                                             <a class="nav-link" href="{{ route('users.index') }}">Manage Users</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" href="{{ route('products.index') }}">Manage Product</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" href="{{ route('tickets.index') }}">Manage Tickets</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" href="{{ route('times.index') }}">Manage Times</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <ul>
                                          <li>
                                          <!-- <a class="dropdown-item" href="{{ route('profile') }}">{{ __('မ') }}</a> -->
                                          </li>
                                          <li>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                          </form>
                                       </li>
                                    </div>
                                 </li>
                            @endguest
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                              <li><a href="{{ route('welcome') }}">လက်မှတ်ဝယ်ရန်</a></li>
                                <li><a href="#">ထီပေါက်စဥ်</a></li>
                                 <li><a href="#">ပါတနာလျောက်ထားရန်</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">ဘာသာစကားပြောင်းရန်</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="{{ asset('img/flag-up-2.png') }}" alt="" /> မြန်မာ </a></li>
                     <li><a href="#"><img src="{{ asset('img/flag-up-1.png') }}" alt="" /> English</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            @guest
            @else
            <li><a href="{{ route('home') }}">ပင်မ</a></li>
            @endguest
            <li><a href="{{ route('welcome') }}">လက်မှတ်ဝယ်ရန်</a></li>
            <li><a href="#">ထီပေါက်စဥ်</a></li>
            <li><a href="#">ပါတနာလျောက်ထားရန်</a></li>
     
            <li><a href="#">အကူအညီ</a></li>
            @guest
               <li><a class="nav-link" href="{{ route('login') }}">{{ __('ဝင်ရန်') }}</a></li>
               @if (Route::has('register'))
               <li><a class="custom-b" href="{{ route('register') }}">{{ __('စာရင်းသွင်းရန်') }}</a></li>
               @endif
            @else
               <li><a href="{{route('tickets.mytickets')}}">မိမိလက်မှတ်များ</a></li>
               <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                     ထွက်ရန်
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                  </form>
               </li>
              
            @endguest
         </ul>
      </div>
            @yield('content')
            
            <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
               </div>
              
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="{{ asset('img/logo.png') }}" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © ၂၀၂၀</p>
                  </div>
                  <div class="col-md-4">
                     <ul class="list-inline socials">
                        <li>
                           <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                     <ul class="right-flag">
                     <!-- <li><a href="#">စည်းကမ်းချက်များ</a></li> -->
                     <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>ဘာသာစကားပြောင်းရန်</span> <img src="img/flag.png" alt="" /> </a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!--main js--> 
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/wow.min.js"></script>
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
</html>