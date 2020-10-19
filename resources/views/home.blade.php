@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 70px">
                <div class="card-header" style="background-color: #486d65;color:#fff">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-lg-4">
                          <div class="card text-white bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center" style="background-color: #E3AC0A;"><h5>عدد المتبرعين<h5></div>
                            <div class="card-body">
                            <h1 class="card-title text-center text-dark" >{{$contributors->count()}}</h1>
                             
                            </div>
                          </div>
                        </div>            
                        <div class="col-sm-12 col-lg-4">
                          <div class="card text-white bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center" style="background-color: #E3AC0A;"><h5>عدد المتعففين</h5></div>
                            <div class="card-body">
                              <h1 class="card-title text-center text-dark">{{$needy->count()}}</h1>
                            </div>
                          </div>
                        </div>
                      </div>

           

                      



                
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">


        @if ($needies->count() > 0 )
        <div class="col table-responsive-sm">
          <h3 class="text-center" style="margin-bottom: 30px;">   معلومات المتعففين    </h3>
            <table class=" table table-striped table-bordered  table-sm" dir="rtl" style="margin-bottom: 70px">
                <thead class="" style="background-color: #486d65;color:#ffffff">
                  <tr class="text-center">
                    <th scope="col">الصورة </th>
                    <th scope="col">الاسم</th>
                    <th scope="col"> رقم الهاتف</th>
                    <th scope="col">المحافظة</th>
                    <th scope="col">العنوان</th>
                    
                    <th scope="col">ماذا يحتاج</th>
                   
                    <th scope="col">لوحة التحكم</th>
                  </tr>
                </thead>
                <tbody>
                     
                    @foreach ($needies as $item)
                    <tr class="text-center">
                        <td style="vertical-align:middle;">
                          <img src="{{URL::asset($item->photo)}}" alt=""
                          class="img-tumbnail" width="200px" height="150px">
                          </td>
                        <td style="vertical-align:middle;">{{$item->user->name}}</td>
                        <td style="vertical-align:middle;">{{$item->user->phone}}</td>
                        <td style="vertical-align:middle;">{{$item->user->province}}</td>
                        <td style="vertical-align:middle;">{{$item->user->address}}</td>
                        
                        <td style="vertical-align:middle;">{{$item->what_you_need}}</td>
                        
                         <td style="vertical-align:middle;">
                             <a title="اضافة" class="text-success" href="{{route('admin.approve',['id'=> $item->id])}}"> <i class="fas fa-plus fa-2x "></i> </a>
                          
                            &nbsp;&nbsp;
                            <a title="تعديل" href="{{route('needy.edit',['id'=> $item->id])}}"> <i class="fas fa-2x fa-edit"></i>  </a>&nbsp;&nbsp; 


                            <a title="حذف" class="text-danger" href="{{route('needy.delete',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                            

                        </td> 
                      </tr>
                     @endforeach
                </tbody>
              </table>


          </div>
        @else
        <div class="col">
            <div class="alert alert-danger" role="alert">
               لا توجد حالات    
              </div>
        </div>

        @endif

    </div>
        </div>
  </div>
</div>
<div class="container">
  <div class="row">
  @if ($donation->count() > 0 )
  
  <div class="col table-responsive-sm">
     <h3 style=""  class="text-center">  حالات تم التبرع لها ولم تعد تظهر في تبويب الحالات المتعففة</h3> 
    <table class=" table table-striped table-bordered  table-sm" dir="rtl"  style="width: 50%;    margin: 30px auto;">
    <thead class="" style="background-color: #486d65;color:#ffffff">
      <tr class="text-center">
        <th scope="col">الاسم  </th>
        <th scope="col">لوحة التحكم</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($donation as $donated)
      <tr class="text-center">
          
          <td>{{$donated->user->name}}</td>
          <td >
           <a title=" اعادة عرضها " class="text-success" href="{{route('needy.donation',['id'=> $donated->id])}}"> <i class="fas fa-retweet fa-2x"></i> </a>   &nbsp;&nbsp; 
           <a title="حذف" class="text-danger" href="{{route('needy.delete',['id'=> $donated->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
          </td>
          
          
        </tr>
       @endforeach
 
    </tbody>
     </table>
  </div>
   @endif
</div>
</div>






  <div class="container">
    <div class="row">
      @if ($users->count() > 0 )
      
  <div class="col table-responsive-sm">
    <h3 style=""  class="text-center"> الادمن</h3> 
    <table class=" table table-striped table-bordered  table-sm" dir="rtl"  style="width: 50%;    margin: 30px auto;">
        <thead class="" style="background-color: #486d65;color:#ffffff">
          <tr class="text-center">
            <th scope="col">الاسم</th>
            <th scope="col">لوحة التحكم</th>
          </tr>
        </thead>
        <tbody>
                     
          @foreach ($users as $user)
          <tr class="text-center">
              
              <td>{{$user->name}}</td>
              <td >
                @if ($user->is_admin)
                <a class="btn btn-danger" href="{{route('users.not.admin',['id' =>$user->id])}}">delete adimn</a>
                @else
                <a class="btn btn-success" href="{{route('users.admin',['id' =>$user->id])}}">make adimn</a>
                 @endif
                </td>
              
              
            </tr>
           @endforeach
      </tbody>
    </table>
  </div>
  @endif
    </div>
  </div>




 





@endsection
