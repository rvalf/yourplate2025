<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function forgotPassword()
    {
        return view('login.forgot-password');
    }

    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('usr_email', $request->email)->first();

        if ($user) {
            session(['success_email' => $request->email]);
            return back()->with('success', 'Email ditemukan!');
        } else {
            return back()->withErrors(['email' => 'Email not found!']);
        }
    }

    public function newPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'password2' => 'required|same:password',
        ]);

        $email = session('success_email');

        if (!$email) {
            return redirect()->route('check.email')->withErrors(['email' => 'Session expired']);
        }

        $user = User::where('usr_email', $email)->first();

        if (!$user) {
            return redirect()->route('check.email')->withErrors(['email' => 'User tidak ditemukan.']);
        }

        // Update password
        $user->usr_password = $request->password;
        $user->save();

        // Hapus session email
        session()->forget('success_email');

        // Redirect ke login dengan pesan
        return redirect('/login')->with('success', 'Password has been changes, please login with new password');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        $user = User::where('usr_id', $credentials['username'])->first();

        if (!$user) {
            $user = User::where('usr_email', $credentials['username'])->first();
        }

        if (!$user) {
            return back()->withErrors([
                'username' => 'Pengguna tidak ditemukan.'
            ])->withInput();
        }

        if ($user && $user->usr_password === $credentials['password']) {
            Auth::guard()->login($user);
            $request->session()->regenerate();

            session(['usr_id' => $user->usr_id]);
            session(['usr_fullname' => $user->usr_fullname]);
            session(['usr_role' => $user->usr_role]);

            if ((int) $user->usr_role === 1) {
                return redirect('/meal');
            } else if ((int) $user->usr_role === 2) {
                return redirect('/seller');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'username' => 'Password salah.'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
