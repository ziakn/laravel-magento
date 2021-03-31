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
            $data=StoreData::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
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
        
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
