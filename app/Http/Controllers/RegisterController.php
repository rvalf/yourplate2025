<?php

namespace App\Http\Controllers;

use App\Models\ActiveSeller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function indexSeller()
    {
        return view('login.seller-register');
    }

    public function activateSeller()
    {
        return view('login.seller-activate');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:64', 'unique:users,usr_id'],
            'email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            'password' => ['required', 'min:8'],
            'password2' => ['required', 'same:password'],
            'fullname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:11'],
            'role' => ['required'],
        ]);

        $user = User::create([
            'usr_id' => $request->username,
            'usr_email' => $request->email,
            'usr_password' => $request->password,
            'usr_fullname' => $request->fullname,
            'usr_address' => $request->address,
            'usr_phone' => $request->phone,
            'usr_dorm' => $request->dorm,
            'usr_role' => $request->role,
            'usr_seller_confirmed' => 0
        ]);

        Auth::guard()->login($user);

        session(['usr_id' => $user->usr_id]);
        session(['usr_fullname' => $user->usr_fullname]);
        session(['usr_role' => $user->usr_role]);

        $request->session()->regenerate();

        if ((int) $user->usr_role === 2) {
            return redirect('/seller/activate');
        }

        return redirect('/');
    }

    public function activateSellerPost(Request $request)
    {
        $request->validate([
            'picture' => ['mimes:jpg,png,jpeg', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('images', 'public');
            $picturePath = 'storage/' . $path;
        } else {
            $picturePath = null;
        }
        ActiveSeller::create([
            'act_image' => $picturePath,
            'act_usr_id_seller' => session('usr_id'),
            'act_approval' => 0,
        ]);

        return redirect('/');
    }
}
