<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        $user = User::find(1);
        return view('admin.profile', compact('user'));
    }

    public function storeProfileDetails(Request $request)
    {
        $user = User::find(1);

        $img = $request->file('img');

        if(isset($img))
        {
            $slug = str_slug($request->full_name) . uniqid() . uniqid() . '.' . $img->getClientOriginalExtension();
            $user->avatar = $slug;
            $img->move('img', $slug);
        }

        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->social = $request->social;

        $user->save();

        return redirect(route('profile'));
    }

    public function mediaAll()
    {
        return view('admin.media-all');
    }

    public function upload()
    {
        return view('admin.upload');
    }

    public function noticeAll()
    {
        return view('admin.notice-all');
    }

    public function noticeNew()
    {
        return view('admin.notice-new');
    }

    public function teachers()
    {
        return view('admin.teachers');
    }

    public function institute()
    {
        return view('admin.institute');
    }
}
