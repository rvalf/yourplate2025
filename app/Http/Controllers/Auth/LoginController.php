<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    // protected $redirectTo = '/home';

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

    public function showLogin()
    {
        return view('login.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validate([
            'usr_email' => 'required|email',
            'usr_password' => 'required'
        ]);

        $user = User::where('usr_email', $credentials['usr_email'])->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard.index'); // Redirect ke dashboard setelah login sukses
        }

        return back()->withErrors(['usr_email' => 'Email atau password salah.'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
