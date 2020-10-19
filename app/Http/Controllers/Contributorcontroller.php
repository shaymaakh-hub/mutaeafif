<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Needy;
use App\Contributor;

class Contributorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       
        return view('contributorinfo')->with('id',$id);
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
     * @param  int  $id
     */
    public function store(Request $request ,$id)
    {
        $this->validate($request,[
            'name' => 'required|min:9',
            'phone' => 'required|min:11|max:11',
             'address' => 'required|min:9',
             'province' => 'required',
          
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
            
         ]);
    


         

        $findcontri=User::where('name',$request->name)->where('phone',$request->phone)->where('address',$request->address)
        ->where('province',$request->province) ->first();

         if($findcontri)  

        {
            $need =Needy::find($id);
            $need->donation_status=1;
             $need->save();

               $contributor = new Contributor;
               $contributor->user_id = $findcontri['id'];
              $contributor->needy_id = $id;
              $contributor->save();
              return  view('message');
       } 
       else{
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' =>$request->address,
            'province' =>$request->province,
            'is_needy_or_contributor' => 1,
            ]);


            $need =Needy::find($id);
            $need->donation_status=1;
             $need->save();


            $contributor = new Contributor;
            $contributor->user_id = $user->id;
            $contributor->needy_id = $id;
            $contributor->save();

       
           return  view('message');
          

        }  




            


             
           
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
