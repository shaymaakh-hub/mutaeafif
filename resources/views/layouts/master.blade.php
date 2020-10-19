<!DOCTYPE html>
<html lang="ar" dir="rtl">
    
 <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title','متعفف')</title>
      
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">



        <link href="{{ asset('css/all.css')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css')}}" rel="stylesheet">
     
 </head>  


{{-- start header --}}

    <body>
     <div class="logo container">
       <div class="row">
     <img src="{{asset('images/websitelogo.png')}}">
     </div>
     </div>
   
      <nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-1x"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
    <li><a class="nav-item nav-link {{ 'mutaeafif' == request()->path() ? 'active' : ''}} " href="{{route('mutaeafif')}}"><span class="navspan " > <i class="fas fa-home fa-1x"> </i> الرئيسية </span> </a></li>
    <li> <a class="nav-item nav-link {{ 'registeration' == request()->path() ? 'active' : ''}}" href="{{route('registeration')}}"><span class="navspan">تسجيل</span></a></li>
      <li><a class="nav-item nav-link {{ 'cases' == request()->path() ? 'active' : ''}}" href="{{route('cases')}}"><span class="navspan"> الحالات المتعففة </span></a></li>
      <li><a class="nav-item nav-link " href="{{ URL::to('/mutaeafif#aboutus')}}"><span class="navspan"> من نحن ؟  </span></a></li>
    </ul>                               
  </div>
</nav>
{{-- end header --}}


<div>
@yield('content')

</div>




{{-- start footer --}}
<!--start copyrights-->
   
<div class="copyrights">
    <div class="fluid">
        <p class="copy">
جميع الحقوق محفوظة لمبادرة البرمجة من اجل العراق  &copy;2020</p>
        <div class="social">
         <ul>
                
                  <li >
                     <a href="#"><i class="fab fa-google-plus-g fa-2x "></i> </a>
                  </li>
             
             <li>
                     <a href="https://twitter.com/muhammed_essa" target="_blank"><i class="fab fa-twitter fa-2x tw" ></i> </a>
                  </li>
                  <li>
                     <a href="https://www.youtube.com/user/muhammedgalaxy" target="_blank"> <i class="fab fa-youtube fa-2x"></i> </a>
                  </li>
                
               
                <li>
                     <a href="https://www.facebook.com/Code4Iraq/" target="_blank"><i class="fab fa-facebook-f fa-2x fb"></i> </a>
                  </li>
                  
              </ul>
        </div>
</div>
</div> 
<!--end copyrights-->

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
 <script src="{{ asset('js/popper.min.js') }}" defer></script>
 <script src="{{ asset('js/jquery.min.js') }}" defer></script>


</body>

</html>


