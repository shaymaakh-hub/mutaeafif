
@extends('layouts.master')
@section('title')
    تسجيل
     @endsection
     <!-- start register -->
    

      
    
         
     @section('content') 
      
     <div class="container">
         <div class="row">
             <div class="reg-text">
         <p  class=" col-lg-7">اذا كنت محتاج الى مال او طعام او دواء او غيره قم بتسجيل معلوماتك هنا  لكي يتم عرض معلوماتك على الموقع في تبويب  الحالات المتعففة  ليتسنى للمتبرعين او المنظمات الانسانية   او  الخيرية  رؤية معلوماتك و مساعدتك . </p>
             </div></div>
             
             
     </div>
    
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
               تسجيل معلوماتك
              </div>
              <div class="card-body">
                  
               <form method="post" action="{{route('registeration.store')}}" enctype="multipart/form-data">
                {{ csrf_field()}}
                   <div class="group">
                       <label class="pad1" for="name"><i class="far fa-user fa-1x pad"></i>الاسم</label>
                   <input type="text" name="name" placeholder="أسمك الثلاثي" value="{{ old('name') }}">
                       </div>
                   
                    
                   
                   <div class="group">
                      <label class="pad6" for="province"><i class="fas fa-map-marker-alt fa-1x pad"></i>المحافظة</label>
                  <select class="pro"  name="province" >
                       <option selected  disabled >اختر محافظتك</option>
                       <option value="بغداد" @if (old('province') == 'بغداد') selected="selected" @endif> بغداد</option>
                       <option value="البصرة" @if (old('province') == 'البصرة') selected="selected" @endif>البصرة</option>
                      <option value=" المثنى" @if (old('province') == 'المثنى') selected="selected" @endif>المثنى</option>
                       <option value="الديوانية" @if (old('province') == 'الديوانية') selected="selected" @endif >الديوانية</option>
                        <option value="بابل"  @if (old('province') == 'بابل') selected="selected" @endif>بابل</option>
                      <option value="ديالى"  @if (old('province') == 'ديالى') selected="selected" @endif>ديالى</option>
                      <option value=" ذي قار"  @if (old('province') == 'ذي قار') selected="selected" @endif>ذي قار</option>
                      <option value="السليمانية"  @if (old('province') == 'السليمانية') selected="selected" @endif>السليمانية</option>
                      <option value="اربيل"  @if (old('province') == 'اربيل') selected="selected" @endif>اربيل</option>
                      <option value="النجف"  @if (old('province') == 'النجف') selected="selected" @endif>النجف</option>
                      <option value="كربلاء"  @if (old('province') == 'كربلاء') selected="selected" @endif>كربلاء</option>
                      <option value="واسط" @if (old('province') == 'واسط') selected="selected" @endif>واسط</option>
                      <option value="نينوى" @if (old('province') == 'نينوى') selected="selected" @endif>نينوى</option>
                      <option value="كركوك" @if (old('province') == 'كركوك') selected="selected" @endif>كركوك</option>
                      <option value="دهوك" @if (old('province') == 'دهوك') selected="selected" @endif>دهوك</option>
                      <option value=" صلاح الدين" @if (old('province') == 'صلاح الدين') selected="selected" @endif>صلاح الدين</option>
                      <option value="الانبار" @if (old('province') == 'الانبار') selected="selected" @endif>الانبار</option>
                      <option value="ميسان" @if (old('province') == 'ميسان') selected="selected" @endif>ميسان</option> 
                    
                  </select>
                   </div>

                   <div class="group">
                    <label class="pad3" for="address"><i class="far fa-address-book pad"></i>العنوان</label>
               <input type="text" name="address" placeholder="عنوان سكنك" value="{{ old('address') }}">
                    </div>
                   
                   <div class="group">
                    <label class="pad2" for="phone"><i class="fas fa-mobile-alt pad"></i> الهاتف</label>
               <input type="number" name="phone" placeholder="رقم هاتفك" value="{{ old('phone') }}">
                    </div>
                

                    <div class="group">
                       <label class="pad4" for="text">ماذا تحتاج؟</label>
                <textarea placeholder="اكتب ما تحتاجه هنا..."  name="text" >
                    {{ old('text') }}
                </textarea>
                       </div>
                       
                   <div class="group">
                       <label class="pad5" for="photo">أرفق صورة لحالتك ان امكن</label>
                <input type="file" name="photo" >
                       </div> 
                    <div class="group">
                       
                        <button type="submit" class="button"> ارسال</button>

                       </div>
                   
                  </form>
              
              </div>
            
               </div></div>
  </div>
  </div>
  
  @endsection
  
   <!-- end register -->  
     
  