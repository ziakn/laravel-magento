<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
   
    public function index()
    {
        $data=User::get();
        return view('pages.list-user',compact('data'));
    }

   
    public function create()
    {
         return view('pages.create-user');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
            $data=User::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
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
        $data=User::find($id);
         return view('pages.edit-user',compact('data'));
    }

    public function editPassword()
    {
        return view('pages.edit-password');
    }

   
    public function changePassword(Request $request)
    {
         $request->validate([
             'newPassword' => ['required'],
             'confirmPassword' => ['same:newPassword'],
         ]);

         if(!Hash::check($request->oldPassword,Auth::user()->password))
         {
             return redirect()->back()->with( 'oldpassword', 'old password wrong'); 
         }
         else
         {                     
             $update=User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newPassword)]);  
             if($update)   
             {
                 return redirect()->back()->with( 'success', ''); 
             } 
             else
             {
                 return redirect()->back()->with( 'error', '');
             }
 
         }
    }


   
    public function update(Request $request)
    {
        
            $request->validate([
            'name' => 'required|string|max:255',
        ]);
            User::where('id',$request->id)->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                ]
            );
          
       return $this->index();
    }

   
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return $this->index();
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }

}
