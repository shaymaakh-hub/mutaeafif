
@extends('layouts.master')
@section('title')
    الحالات المتعففة
     @endsection

   @section('content')
       
  
   <!-- start cases -->
     <div class="cases">
     <div class="container-fluid">
     <div class="row ">
      
      @if($needies->count()>0)
       
      @foreach( $needies as $needi) 
     
     <div class="card " style="width: 18rem;" >
  <img src="{{$needi->photo}} " class="card-img-top " width="400px" height="200px" />
  <div class="card-body">
    
    
    <p class="card-text"><span>الاسم/</span>{{$needi->user->name }}</p>
    <p class="card-text"><span>المحافظة/</span>{{$needi->user->province}}</p>
    <p class="card-text"><span>العنوان/</span>{{$needi->user->address}} </p>
  <p class="card-text"><span>الهاتف/</span> {{$needi->user->phone}}</p>
  
     <p class="card-text mar"> <span>بحاجة الى /</span>{{$needi->what_you_need}}   </p> 
  
    <a href="{{route('contributorinfo',['id'=>$needi->id])}}" class="donated">تبرع</a>
  </div>
         <div class="card-footer">
      <small class="text-muted">  {{$needi->created_at->toFormattedDateString()}}  </small>
    </div>
</div>
     
@endforeach
@else
   <div class="container">  <h4 class="text-center" style="height: 330px"> لا توجد حالات  مسجلة</h4></div>
 
   @endif
     </div>
   </div>  
   
     </div>
    <!-- end cases -->
     @endsection 

     
     