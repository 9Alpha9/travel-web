<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileAccountController extends Controller
{
    //
    public function index(){
        return view('components/pages/infoPages/profileAccount');
    }

    public function save(Request $request){
        if(!empty($request->emailProfile)){
            $validated = $request->validate([
                'emailProfile' => 'email'
            ],
            [
                'email' => "Format email salah!"
            ]);
        }

        !empty($request->profileUsername) ? $data["full_name"] = $request->profileUsername : "";
        !empty($request->phoneNumber) ? $data["mobile_number"] = $request->phoneNumber : "";
        !empty($request->emailProfile) ? $data["email"] = $request->emailProfile : "";
        !empty($request->password) ? $data["password"] = $request->password : "";

        if($request->file('avatarProfile')){
            $uploadedFile = $request->file('avatarProfile');
            $extension = "." . $uploadedFile->getClientOriginalExtension();
            $filename = "avatar_" . strtolower(str_replace(' ', '_', Auth::user()->full_name)) . $extension;
            $uploadedFile->move(base_path('public/asset/img/avatar/'), $filename);

            $data["image"] = $filename;

        }

        if(!empty($data)){
            try{
                $user = User::where('id_user', Auth::user()->id_user)->update($data);
                return redirect()->route('profile.index')->with(['saveAccount' => 'success']);
            }
            catch(\Exception $e){
                return back()->withErrors('saveError', $e)->withInput();
            }
        }
        return redirect()->route('profile.index');
    }

    public function metodeSmart(){
        return view ('components/pages/metodeSmart');

    }
}
