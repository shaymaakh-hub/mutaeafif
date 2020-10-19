
  
  @extends('layouts.master')
  @section('title')
   الرئيسية
   @endsection


     @section('content')
         
    
    <div class="cover">
        <img  src="{{asset('images/poor.jpg')}}">
      </div>
      
 
 <!-- start poverty -->
 <div class="poverty">
 <div class="container-fluid">
 <div class="poverty-content row">
             <div class="card col-lg-5">
                      <div class="card-body">
                        <p class="card-text"> يعرف الفقر بأنه عدم القدرة على الحفاظ على المستوى الأدنى من المعيشة، كما يعرف بغياب الحد الأدنى من الدخل أو الموارد لتلبية الحاجات الأساسية، ويشير الفقر بشكل عام إلى مستوى غير مقبول من الأوضاع المعيشية إلى وضع يتسم بالحرمان من موارد، أو قدرات تعتب ضرورية لحياة بشرية كريمة.ويرتبط الفقر بمظاهر حرمان مادي ملحوظ، مثل: تردي الأوضاع السكنية، وسوء التغذية، واللباس، ويؤثر الفقر بشكل كبير على مجموعات وفئات قدرتها على الوصول إلى المصادر الاقتصادية محدودة: (كالمرضى، والأيتام، والنساء)</p>
                    </div>
               <div class="img-holder"> <img src="{{asset('images/poverty.png')}}" class="card-img-top" alt="..." /></div> 
             </div>
 
             <div class="card col-lg-5">
               
               <div class="card-body">
               
                 <p class="card-text"> يفترض مفهوم الفقر وجود حد أدنى من الاستهلاك والدخل يقاس عليه مستوى معيشة الفرد يسمى خط الفقر,رغم الثروة النفطية الهائلة في العراق إلا أن شخصا واحدا من بين كل خمسة أشخاص لا يزال يعيش تحت خط الفقر، في بلد يعاني من استشراء الفساد وارتفاع معدلات البطالة بين الشباب،وكشفت وزارة التخطيط أن نسبة الفقر في البلاد وصلت في عام 2018 إلى 20 %، مشيرة إلى تبابين النسب بين المحافظات، حيث تتجاوز النسبة حاجز الـ 50 % في بعض المحافظات.
             </p>
                 
               </div>
                <div class="img-holder"> <img src="{{asset('images/average.png')}}" class="card-img-top" alt="..."></div> 
             </div>
 </div>
 </div>
 </div>
 <!-- end poverty -->
 
 <!-- start info -->
 
 <div class="info">
     
           <div class="info-box ">
           <img src="{{asset('images/basic-needs.png')}}" width="100px" height="100px" />
           <div class="info-text">
           <p>اذا كنت محتاج الى المساعدة اضغط على تسجيل  لكي تنتقل الى صفحة تسجيل المعلومات</p>
           <a href="{{route('registeration')}}" class="reg">تسجيل</a>
            </div></div> 
     
           <div class="info-box ">
           <img src="{{asset('images/help-hand.png')}}" width="100px" height="100px" />
           <div class="info-text">
             <p>اذا كنت تريد التبرع الى حالة اضغط على تبرع لكي تنتقل الى صفحة الحالات المتعففة</p>
             <a href="{{route('cases')}}" class="donate">تبرع</a>
           </div></div> 
 </div>
 
 <!-- end info -->


 
 
   <!-- start about us -->

   <div class="about-us " id="aboutus">

    <div class="about-box2 ">
    <div class="about-text">
      <h2 class="">من نحن ؟</h2>
      <h4 class="">البرمجة من اجل العراق</h4>
      <div class="about-box1 ">
        <img src="{{asset('images/cfilogo1.png')}}"  />
        </div> 
      <p> هي مبادرة إنسانية غير ربحية تهدف الى خدمة المجتمع عن طريق البرمجة تعتبر مبادرة " البرمجة من اجل العراق"  مبادرة تعليمية حقيقية ترعى المهتمين بتعلم تصميم وبرمجة تطبيقات الهاتف الجوال ومواقع الانترنت وبرامج الحاسوب والشبكات والاتصالات ونظم تشغيل الحاسوب باستخدام التقنيات مفتوحة المصدر  ، تدعو هذه المبادرة جميع الطلبة والخريجين والهواة والأساتذة الجامعيين والمهتمين مجال البرمجة وتقنيات المعلومات وكذلك الاختصاصات الاخرى الى التطوع والمشاركة الفعلية لأجل الارتقاء بواقع البلد.
      </p>
      <a href="" class="more-info">مزيد من المعلومات</a>
    </div></div> 
</div>



 
 
            
  <!-- start team -->
  <h2 class="team">فريق العمل</h2>
   <div class="team-work">
     
           <div class="box ">
           <img src="{{asset('images/team-work1.jpg')}}">
           <div class="text-section">
             <h4>محمد عيسى</h4>
             <p>مهندس كهرباء</p>
             <p>مؤسس مبادرة البرمجة من اجل العراق</p>
           </div>
           <ul>
             <li><a href=""><i class="fab fa-pinterest 2x"></a></i></li>
             <li><a href=""><i class="fab fa-codepen 2x"></i></a></li>
             <li><a href=""><i class="fab fa-github 2x"></i></a></li>
           </ul>
 
           </div>
 
 
        
           <div class="box ">
           <img src="{{asset('images/team-work2.jpg')}}">
           <div class="text-section">
           <h4>شيماء خالد</h4>
             <p>مهندسة حاسبات</p>
             <p>عضو في مبادرة البرمجة من اجل العراق</p>
             
           </div>
           <ul>
             <li><a href=""><i class="fab fa-pinterest 2x"></a></i></li>
             <li><a href=""><i class="fab fa-codepen 2x"></i></a></li>
             <li><a href=""><i class="fab fa-github 2x"></i></a></li>
           </ul>
           </div>
 
 
           <div class="box ">
           <img src="images/team-work3.jpg">
           <div class="text-section">
           <h4>عبدالرحمن علي </h4>
             <p>علوم حاسبات </p>
             <p>مسؤول في مبادرة البرمجة من اجل العراق</p>
             
           </div>
           <ul>
             <li><a href=""><i class="fab fa-pinterest 2x"></i></a></li>
             <li><a href=""><i class="fab fa-codepen 2x"></i></a></li>
             <li><a href=""><i class="fab fa-github 2x"></i></a></li>
           </ul>
           </div>
   </div>
 
  <!-- end team -->
  @endsection 