<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login')->with('login', 'active');
    }

    public function login(Request $request){
        try{
            $column = $this->username();
            $user = User::select($column)->where($column, $request->username)->get();
            if(Auth::attempt([$this->username() => $request->username, 'password' => $request->password])){
                $request->session()->regenerate();
                return redirect()->route('landingpage');
            }
        } catch(\Exception $e){

        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(Request $request){
        if($request->file('avatar')) {
            $uploadedFile = $request->file('avatar');
            $extension = '.'.$uploadedFile->getClientOriginalExtension();
            $filename  = "avatar_".$request->username.$extension;
            $uploadedFile->move(base_path('public/images/avatar/'), $filename);
        }

        try{
            $newUser = User::create([
                'id_role' => '4',
                'username' => $request->username,
                'name' => $request->name,
                'avatar' => isset($filename) ? $filename:'default.jpg',
                'email'=> $request->email,
                'password' => bcrypt($request->password),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('dashboard');
        }
        catch(\Exception $e){
            dd($e);
        }

    }

    public function registerForm(){
        return view('register')->with('register', 'active');
    }

    public function username()
    {
        $login = request()->input('email');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'no';
        request()->merge([$field => $login]);
        return $field;
    }
}

?>
