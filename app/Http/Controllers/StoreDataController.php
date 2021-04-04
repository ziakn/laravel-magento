<?php

namespace App\Http\Controllers;

use App\Models\StoreData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreDataController extends Controller
{
    
    public function index()
    {
        $data=StoreData::get();

        return view('pages.list',compact('data'));

    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
       
            $flag ="error";
            $request->file('myFile')->store('public/uploads/avatar');
            $pic= '/storage/uploads/avatar/'.$request->myFile->hashName();   
            $data=StoreData::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'myFile' => $pic,
                ]
            );
            if($data)
            {
                $flag = "success";
            }
            return redirect()->back()->with( $flag, ''); 
    }

    
    public function show($id)
    {
         $data=StoreData::find($id);
         return view('pages.edit',compact('data'));
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
            $pic=$request->myFile;
            if($request->myNewFile)
            {
                 $request->file('myNewFile')->store('public/uploads/avatar');
                $pic= '/storage/uploads/avatar/'.$request->myNewFile->hashName(); 
            }
             
            StoreData::where('id',$request->id)->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'myFile' => $pic,
                ]
            );
          
       return $this->index();
    }

    
    public function destroy($id)
    {
        StoreData::where('id',$id)->delete();
       return $this->index();
    }
}
