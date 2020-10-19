<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Needy;
use App\Contributor;


class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
       
        
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
             'password' => 'required|min:4',
             

         ],
        [
           'name.required' => 'الاسم مطلوب',
           'password.required' => 'الباسورد مطلوب',
        ]);
    
         
         $user = User::create([
            'name' => $request->name,
            'password' => bcrypt('password'),
            'phone' =>0 ,
            'address' =>'null',
            'province' =>'null',
            
    
            ]);
             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $needies = Needy::find($id);
        return view('admin.edit')->with('needies',$needies);
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
        $needy = Needy::find($id);
        $user = User::find($id);
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
             'address' => 'required',
             'province' => 'required',
             'text'=> 'required'

           
        ]);
      

        
        if($request->hasFile('photo')){
        $image = $request->photo;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/photos',$image_new_name);
        

         $needy->photo = 'uploads/photos/'.$image_new_name; 

        }
        
            $needy->user->name = $request->name;
            $needy->user->phone  = $request->phone;
            $needy->user->address  = $request->address;
            $needy->user->province  = $request->province;
            $needy->what_you_need  = $request->text;
            $needy->save();
            $needy->user->save();


            // $post->tags()->sync($request->tags);
          return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $needy = Needy::find($id);
        // $needy->delete($id);
        $needy->user->delete($id );
        return redirect()->back();
    }





    public function approve($id)
    {
     $needy =Needy::find($id);
     $needy->admin_approval =1;
     $needy->save();

     return redirect()->back();
        
    }

    public function donation($id)
    {
     $needy =Needy::find($id);
     $needy->donation_status = 0;
     $needy->save();
     return redirect()->back();
        
    }




    public function admin($id)
    {
     $user =User::find($id);
     $user->is_admin =1;
     $user->save();
     return redirect()->back();
        
    }

    public function notAdmin($id)
    {
     $user =User::find($id);
     $user->is_admin =0;
     $user->save();
     return redirect()->back();
    }   


}
