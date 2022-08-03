<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;
use App\Models\OwnerDetail;
use Symfony\Component\HttpFoundation\Response;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Owner::all();
        // dd(Owner::all());
        return response()->view('layouts.owener.index',['oweners'=>$data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents=Owner::all();

        $owener=new Owner();
        return response()->view('layouts.owener.create',compact('owener','parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owener=new Owner();

        $request->validate([
            'username' => 'required',
            'mail_id' => 'required|email|unique:users,email,',
            'mobile_number'=>'required|min:10',
            'password'=>'required|min:6',
            //'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        $owener=new Owner();
        $owener->username=$request->input('username');
        $owener->mail_id=$request->input('mail_id');
        $owener->mobile_number=$request->input('mobile_number');
        $owener->password=$request->input('password');
        $owener->photo=$request->input('photo');

        $isUpdate=$owener->save();

        session()->flash('alert-type',$isUpdate ?'success':'danger');
        session()->flash('message',$isUpdate ?'created successfully':'created faild');
       // return redirect('/oweners')->with('success','Oweners Created!');


       return redirect()->back();
    // return redirect('/oweners')->with('success','Oweners Deleted!');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $owener=OwnerDetails::find($id);

        // dd(OwnerDetails::find($id));

    //    $owener=Owener::find($id);

    //    dd($owener->owener_details->address);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $oweners=Owner::find($id);
        //dd($data);
        return response()->view('layouts.owener.edit',compact('oweners'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'username' => 'required',
            'mail_id' => 'required|email|unique:users,email,',
            'mobile_number'=>'required|min:10',
            'password'=>'required|min:6',
            //'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        //
        $owener=Owner::findOrFail($id);

        $owener->username=$request->input('username');
        $owener->mail_id=$request->input('mail_id');
        $owener->mobile_number=$request->input('mobile_number');
        $owener->password=$request->input('password');
        $owener->photo=$request->input('photo');

        $isSave=$owener->save();

        session()->flash('alert-type',$isSave ?'success':'danger');
        session()->flash('message',$isSave ?'updated successfully':'updated faild');
       // return redirect('/oweners')->with('success','Oweners Created!');
        return redirect()->back();


    //    return response()->view('layouts.owener.index',['oweners'=>$owener]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * Illuminate\Http\JsonResponse
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $owner=Owner::findOrFail($id);
        $isDeleted=$owner->delete();

        return response()->json(
            [
                 'icon'=>$isDeleted ? 'success' :'error',
                 'title'=>$isDeleted ?' Deleted Successfully':'Faild Dlete',
             ],$isDeleted ? Response::HTTP_OK :Response::HTTP_BAD_REQUEST);


    }

}

