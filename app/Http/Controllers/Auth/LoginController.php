<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = '/home';
=======
    //protected $redirectTo = '/home';
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
<<<<<<< HEAD


     // protected $redirectTo = '/home';
     
    protected function redirectTo()
    {
        return Auth::user()->role === 'dokter' ? "/dokter" : "/home";
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
}
