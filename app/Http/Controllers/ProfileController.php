<?php

namespace App\Http\Controllers;

use App\Models\ActiveSeller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('buyer.profile', compact('user'));
    }

    public function indexSeller()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('seller.profile', compact('user'));
    }

    public function edit()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('buyer.edit-profile', compact('user'));
    }

    public function editSeller()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('seller.edit-profile', compact('user'));
    }

    public function editPassword()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('buyer.edit-password', compact('user'));
    }

    public function editPasswordSeller()
    {
        $user = User::where('usr_id', session('usr_id'))->first();

        return view('seller.edit-password', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'dorm' => ['nullable', 'string'],
            'phone' => ['required', 'string', 'min:11'],
        ]);

        $user = User::where('usr_id', session('usr_id'))->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        $user->update([
            'usr_fullname' => $request->fullname,
            'usr_address' => $request->address,
            'usr_dorm' => $request->dorm ? $request->dorm : null,
            'usr_phone' => $request->phone,
        ]);

        if ((int) $user->usr_role === 2) {
            return redirect('/seller/profile')->with('success', 'Password updated successfully!');
        }

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'min:8'],
            'new_password' => ['required', 'min:8'],
            'new_password2' => ['required', 'same:new_password'],
        ]);

        $user = User::where('usr_id', session('usr_id'))->first();

        if ($user->usr_password != $request->old_password) {
            return redirect()->back()->withErrors(['old_password' => 'Your old password is incorrect!']);
        }

        $user->update([
            'usr_password' => $request->new_password,
        ]);

        if ((int) $user->usr_role === 2) {
            return redirect('/seller/profile')->with('success', 'Password updated successfully!');
        }

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    public function sellerList()
    {
        $activeSellers = ActiveSeller::with('userSeller')->get();

        $confirmedSellers = User::where('usr_seller_confirmed', 1)->get();

        return view('seller2.index', compact('activeSellers', 'confirmedSellers'));
    }

    public function getSellerList($id)
    {
        $actUser = ActiveSeller::where('act_id', $id)->first();
    
        return view('seller2.detail', compact('actUser'));
    }    

    public function approveSeller($id)
    {
        $activeSeller = ActiveSeller::findOrFail($id);

        $activeSeller->act_approval = 1;
        $activeSeller->save();

        $seller = User::where('usr_id', $activeSeller->userSeller->usr_id)->firstOrFail();
        $seller->usr_seller_confirmed = 1;
        $seller->save();

        return redirect('/seller-list')->with('success', 'Seller approved successfully.');
    }

    public function rejectSeller($id)
    {
        $activeSeller = ActiveSeller::findOrFail($id);

        $activeSeller->act_approval = 2;
        $activeSeller->save();

        return redirect('/seller-list')->with('success', 'Seller reject successfully.');
    }

    public function nonactiveSeller(Request $request)
    {
        $seller = User::where('usr_id', $request->usr_id)->firstOrFail();

        $seller->usr_seller_confirmed = 0;
        $seller->save();

        return redirect('/seller-list')->with('success', 'Seller nonactive successfully.');
    }
}
