<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Session;
use Auth;
class UserProfileController extends Controller
{

public function show(){ 
    $data =Auth::user()->first();
    return view('user.profile.show', compact('data'));
}


    public function edit(){
        $data =Auth::user()->first();
        
        return view('user.profile.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $data =Auth::user()->first();
        // $data= new User();
        $data->fname =  $request->fname;
        $data->lname =  $request->lname;
        $data->username =  $request->username;
        $data->email =  $request->email;
        $data->phone =  $request->phone;
        $data->email_verified_at =  $request->email_verified_at;
        $data->password =  $request->password;
        $data->nid =  $request->nid;

        if($request->hasfile('image'))
        {
            $destination1 = 'assets/img/'.$data->image;
            if(File::exists($destination1))
            {
                File::delete($destination1);
            }
            $file1 = $request->file('image');
            $extention1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extention1;
            $file1->move('assets/img/', $filename1);
            $data->image = $filename1;
        }
       
        $data->update();
        return redirect()->back()
                        ->with('success','Profile updated successfully');
    }
   
}
