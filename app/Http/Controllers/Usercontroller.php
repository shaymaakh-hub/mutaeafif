<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use App\Needy;
use Auth;
use DB;

class Usercontroller extends Controller
{    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registeration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required|min:9',
            'phone' => 'required|min:11|max:11',
             'address' => 'required|min:9',
             'province' => 'required',
             'text'=> 'required|min:9'

         ],
        [
           'name.required' => 'الاسم مطلوب',
          
           'name.min' => 'الاسم الثلاثي قصير  ',
           'phone.required' => 'رقم الهاتف مطلوب',
           'phone.min' => '  يجب ان يتكون رقم الهاتف من 11 رقم ',
           'phone.max' => '  يجب ان يتكون رقم الهاتف من 11 رقم ',
           'address.required' => 'العنوان مطلوب',
           'address.min' => 'العنوان قصير',
           'province.required' => 'المحافظة مطلوب',
           'text.required'=> 'ماذا تحتاج مطلوب ',
           'text.min'=> 'اكتب اكثر عن ما تحتاجه '

        ]);
    
         
         $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' =>$request->address,
            'province' =>$request->province,
    
            ]);
            
        


        if($request->hasFile('photo')){
            $image = $request->photo;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/photos',$image_new_name);
           
        $needy = Needy::create([
            'user_id' => $user->id,
            'what_you_need'  =>$request->text,
            "photo" => 'uploads/photos/'.$image_new_name,
           
        ]);
        }else{
            $needy = Needy::create([
                'user_id' => $user->id,
                'what_you_need'  =>$request->text,
                "photo"  =>'uploads\photos\no-image.png',  ]);
        }


            return  view('message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  return view('cases')->with('users',User::all())
        // ;

        
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
