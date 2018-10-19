<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'sur_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        
       
        return User::create([
            'name' => $data['name'],
            'sur_name' => $data['sur_name'],
            'email' => $data['email'],
            'auth' => 3,
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request){
        $provier="";$provier_id="";
        User::create([
            'name' => $request->name,
            'sur_name' => $request->sur_name,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'start_date' => $request->start_date,
            'graduated_date' => $request->graduated_date,
            'school_id' => $request->school_id,
            'identity_id' => $request->identity_id,
            'department' => $request->department,
            'country' => $request->country,
            'auth' => 3,
            'password' => Hash::make($request->password),
            'provider' => $provier,
            'provider_id' => $provier_id,
        ]);
    }

//id  name    sur_name    email   birth_date  start_date  graduated_date  school_id   department  country password    auth


    
}
