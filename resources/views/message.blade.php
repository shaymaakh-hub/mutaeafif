
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
     
  <head>
          <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>مُتعفِّف</title>
       
         <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
         
         <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
 
 
 
         <link href="{{ asset('css/all.css')}}" rel="stylesheet">
         <link href="{{ asset('css/app.css')}}" rel="stylesheet">
     
       <!-- start added this to make dropdown work -->
       {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
        <!--end added this to make dropdown work --> 
     
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
     <script src="{{ asset('js/popper.min.js') }}" defer></script>
     <script src="{{ asset('js/jquery.min.js') }}" defer></script>
     
  </head> 

  <body>
<div class="message">
    <div class="container">
        <div class="row">
                <div class="card col-lg-8">
                    <div class="card-body">
                        <h4> تم تسجيل معلوماتك بنجاح</h4>
                    </div>
                    <a href="{{route('mutaeafif')}}" class="back">رجوع</a>
      
                </div>
            </div>
            </div>         
    </div>
  </body>
 </html>
  