
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    
 <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> dashboard </title>
        <link href="{{ asset('css/all.css')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
       

    </head> 
    
     
    <body>






{{-- <div class="container">
    <div class="row">
        <div class="reg-text">
    <p  class=" col-lg-7">اذا كنت محتاج الى مال او طعام او دواء او غيره قم بتسجيل معلوماتك هنا  لكي يتم عرض معلوماتك على الموقع في تبويب  الحالات المتعففة  ليتسنى للمتبرعين او المنظمات الانسانية   او  الخيرية  رؤية معلوماتك و مساعدتك  </p>
        </div></div>
        
        
</div> --}}

@if(count($errors)>0)
        <div class="container errors">
        <ul class="navbar-nav row ">
        @foreach($errors->all() as $error)
        <li class="nav-item active alert alert-danger col-lg-7 mar-auto text-center"  role="alert">
               {{$error}}
            </li>
                @endforeach
           
        </ul></div>
           @endif
  





           <div class="container">
            <div class="row">

             <div  class="register col-md-7 ">
            <div class="card text-center">
         <div class="card-header">
          تسجيل معلومات
         </div>
         <div class="card-body">
             
          <form method="post" action="{{route('needy.update',['id'=> $needies->id])}}" enctype="multipart/form-data">
           {{ csrf_field()}}
              <div class="group">
                  <label class="pad1" for="name"><i class="far fa-user fa-1x pad"></i>الاسم</label>
              <input type="text" name="name" placeholder="أسمك الثلاثي" value="{{ $needies->user->name }}">
                  </div>
              
               
              
              <div class="group">
                 <label class="pad4" for="province"><i class="fas fa-map-marker-alt fa-1x"></i>المحافظة</label>
             <select class="pro"  name="province" >
                  <option selected  disabled >اختر محافظتك</option>
                  <option value="بغداد" @if ($needies->user->province  == 'بغداد') selected="selected" @endif> بغداد</option>
                  <option value="البصرة" @if ($needies->user->province  == 'البصرة') selected="selected" @endif>البصرة</option>
                 <option value=" المثنى" @if ($needies->user->province  == 'المثنى') selected="selected" @endif>المثنى</option>
                  <option value="الديوانية" @if ($needies->user->province  == 'الديوانية') selected="selected" @endif >الديوانية</option>
                   <option value="بابل"  @if ($needies->user->province == 'بابل') selected="selected" @endif>بابل</option>
                 <option value="ديالى"  @if ($needies->user->province  == 'ديالى') selected="selected" @endif>ديالى</option>
                 <option value=" ذي قار"  @if ($needies->user->province  == 'ذي قار') selected="selected" @endif>ذي قار</option>
                 <option value="السليمانية"  @if ($needies->user->province  == 'السليمانية') selected="selected" @endif>السليمانية</option>
                 <option value="اربيل"  @if ($needies->user->province  == 'اربيل') selected="selected" @endif>اربيل</option>
                 <option value="النجف"  @if ($needies->user->province  == 'النجف') selected="selected" @endif>النجف</option>
                 <option value="كربلاء"  @if ($needies->user->province  == 'كربلاء') selected="selected" @endif>كربلاء</option>
                 <option value="واسط" @if ($needies->user->province  == 'واسط') selected="selected" @endif>واسط</option>
                 <option value="نينوى" @if ($needies->user->province  == 'نينوى') selected="selected" @endif>نينوى</option>
                 <option value="كركوك" @if ($needies->user->province == 'كركوك') selected="selected" @endif>كركوك</option>
                 <option value="دهوك" @if ($needies->user->province == 'دهوك') selected="selected" @endif>دهوك</option>
                 <option value=" صلاح الدين" @if ($needies->user->province  == 'صلاح الدين') selected="selected" @endif>صلاح الدين</option>
                 <option value="الانبار" @if ($needies->user->province  == 'الانبار') selected="selected" @endif>الانبار</option>
                 <option value="ميسان" @if ($needies->user->province  == 'ميسان') selected="selected" @endif>ميسان</option> 
               
             </select>
              </div>

              <div class="group">
               <label class="pad3" for="address"><i class="far fa-address-book pad"></i>العنوان</label>
          <input type="text" name="address" placeholder="عنوان سكنك" value="{{$needies->user->address }}">
               </div>
              
              <div class="group">
               <label class="pad2" for="phone"><i class="fas fa-mobile-alt pad"></i> الهاتف</label>
          <input type="number" name="phone" placeholder="رقم هاتفك" value="{{ $needies->user->phone }}">
               </div>
           

               <div class="group">
                  <label class="pad4" for="text">ماذا تحتاج؟</label>
           <textarea placeholder="اكتب ما تحتاجه هنا..."  name="text" >
             {{$needies->what_you_need}} 
           </textarea>
                  </div>
                  
              <div class="group">
                  <label class="pad5" for="photo">الصورة التي تم رفعها </label>
                  <div> <img src="{{URL::asset($needies->photo)}}" alt=""
                    
                    class="img-tumbnail" width="200" height="200"></div>

           <input type="file" name="photo" lang="ar">
                  </div> 
               <div class="group">
                  
                   <button type="submit" class="button"> تحديث</button>

                  </div>
              
             </form>
         
         </div>
       
          </div></div>
</div>
</div>


</body>
</html>
