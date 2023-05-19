<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login')->with('login', 'active');
    }

    public function login(Request $request){
        try{
            $column = $this->username($request->email);
            $user = User::where($column, $request->email)->get();
            if(!empty($user->first()->email)){
                if(Auth::attempt([$column => $request->email, 'password' => $request->password])){
                    $request->session()->regenerate();
                    return redirect()->route('landingpage');
                }
                else{
                    return back()->withErrors(['wrongPassword' => 'Oops! password yang anda masukkan salah!']);
                }
            }
            else{
                return back()->withErrors(['userNotFound' =>  "Email dan nomor telphone belum terdaftar!"]);
            }
        } catch(\Exception $e){
            dd($e);
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

    public function username($username)
    {
        $field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile_number';
        request()->merge([$field => $username]);
        return $field;
    }

    //tambahkan script di bawah ini
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    //tambahkan script di bawah ini
    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            if($user != null){
                if(!empty($user->social_id)){
                    if(Auth::attempt(["email" => $user_google->getEmail(), "password" => 0])){
                        $request->session()->regenerate();
                        return redirect()->route('landingpage');
                    }
                    else{
                        dd('error auth attempt old');
                    }
                    // \auth()->login($user, true);
                }
                else{
                    return redirect()->route('login')->withErrors(['loginError' => 'Email ini sudah terdaftar dengan tidak menggunakan google silahkan login menggunakan email tersebut.']);
                }
            }else{
                $create = User::Create([
                    'user_type' => 'Pelanggan',
                    'social_id' => $user_google->getId(),
                    'email' => $user_google->getEmail(),
                    'full_name' => $user_google->getName(),
                    'image' => $user_google->getAvatar(),
                    'password' => bcrypt(0),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'email_verified_at' => now()
                ]);

                if(Auth::attempt(["email" => $user_google->getEmail(), "password" => 0])){
                    $request->session()->regenerate();
                    return redirect()->route('landingpage');
                }
                else{
                    dd('error auth attempt new');
                }
                // \auth()->login($create, true);
            }

        } catch (\Exception $e) {
            // return redirect()->route('login')->withErrors(['loginError' => "tes"]);
            dd($e);
        }
    }
}

?>