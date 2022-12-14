<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\Welcome;
use Illuminate\Support\Facades\Notification;

class userController extends Controller
{
      //Gets the register page
      public function create(){
        return view('user.register');
    }
    //Store users profile
    public function store(Request $request){
        
     $formData=$request->validate(
        [
          'name'=>'required|min:8',
          'email'=>'required|email|unique:users|email:rfc,dns',
          'password'=>['required','min:6','confirmed'],
        
        ]
        );
        $formData['password']=bcrypt($formData['password']);
        $user=User::create($formData);
       // Notification::send($user,new Welcome($user->name));
  
        auth()->login($user);
     return redirect('/user/'.auth()->id())->with('success','Account Created Successfully');
    }
    //User logout function
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Account Created Successfully');
    }
    // User login fuction
    public function login(Request $request){
        $form_data=$request->validate(
            [
                'email'=>['email','required'],
                'password'=>['required','min:6']
            ]
            );
            
            if($request->remember=="yes"){
                $request->remember=true;
            }else{
                $request->remember=false;
            }
            
            if(auth()->attempt($form_data,$request->remember)){
                $request->session()->regenerate();
                return redirect('/user/'.auth()->id())->with('success','Account Logged In Successfully');

            }
            return back()->withErrors(['error'=>'Invalid Login Details']);
        
    }
    public function update(Request $request, User $user){
        
        $formData=$request->validate(
           [
             'name'=>'min:8',
             'email'=>'email|unique:users|email:rfc,dns',
             'password'=>['min:6','confirmed'],
           
           ]
           );
           $formData['password']=bcrypt($formData['password']);
           $user->update($formData);
          
        return redirect('/user/'.auth()->id())->with('success','Account Created Successfully');
       }

}
