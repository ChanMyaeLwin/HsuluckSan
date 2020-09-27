@extends('layouts.master')

@section('content')
             <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                     <h1>Dashboard</h1>
               </div>
               <div class="row clearfix">
                     <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{route('welcome')}}">
                        <div class="box-img">
                           <h4>လက်မှတ်ရှာရန်</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{route('balances.index')}}">
                        <div class="box-img">
                           <h4>လက်ကျန်ငွေစာရင်း</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{route('tickets.mytickets')}}">
                        <div class="box-img">
                           <h4>ဝယ်ထားသော လက်မှတ်များ</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>   
                    @can('role-edit')
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{route('incomes.index')}}">
                        <div class="box-img">
                           <h4>ဝင်ငွေစာရင်း</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>  
                    @endcan
                    @can('role-edit')
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{ route('tickets.index') }}">
                        <div class="box-img">
                           <h4>လက်မှတ်များ</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>  
                    @endcan
                    @can('role-edit')
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{ route('users.index') }}">
                        <div class="box-img">
                           <h4>အသုံးပြုသူများ</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>  
                    @endcan
                    @can('role-edit')
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{ route('times.index') }}">
                        <div class="box-img">
                           <h4>အကြိမ်အရေအတွက်</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>  
                    @endcan
                    @can('role-edit')
                    <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{ route('roles.index') }}">
                        <div class="box-img">
                           <h4>ရာထူးများ</h4>
                           <p></p>
                        </div>
                     </a>
                    </div>  
                    @endcan
               </div> 
             
              
                 
               </div>
            </div>
         </div>
      </div>
      
      

@endsection