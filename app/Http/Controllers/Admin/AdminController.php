<?php

namespace App\Http\Controllers\Admin;

use App\Option;
use App\Teacher;
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
        $teachers = Teacher::all();

        return view('admin.teachers', compact('teachers'));
    }

    public function addTeacher()
    {
        return view('admin.add-teacher');
    }

    public function storeTeacher(Request $request)
    {
        $teacher = New Teacher;

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone_no = $request->phone;
        $teacher->address = $request->address;
        $teacher->role = $request->role;

        $img = $request->file('dp');

        if(isset($img))
        {
            $slug = str_slug($request->name) . uniqid() . uniqid() . '.' . $img->getClientOriginalExtension();
            $teacher->dp = $slug;
            $img->move('img', $slug);
        }

        $teacher->save();

        return redirect(route('teachers'));
    }

    public function editTeacher($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.edit-teacher', compact('teacher'));
    }

    public function updateTeacher(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone_no = $request->phone;
        $teacher->address = $request->address;
        $teacher->role = $request->role;

        $img = $request->file('dp');

        if(isset($img))
        {
            $slug = str_slug($request->name) . uniqid() . uniqid() . '.' . $img->getClientOriginalExtension();
            $teacher->dp = $slug;
            $img->move('img', $slug);
        }

        $teacher->save();

        return redirect(route('teachers'));
    }

    public function deleteTeacher($id)
    {
        Teacher::find($id)->delete();

        return redirect(route('teachers'));
    }

    public function institute()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('admin.institute', compact('infos'));
    }

    public function option(Request $request)
    {
        $phone = Option::find(2);
        $phone->option_value = $request->phone;
        $phone->save();

        $email = Option::find(3);
        $email->option_value = $request->email;
        $email->save();

        $address = Option::find(4);
        $address->option_value = $request->address;
        $address->save();

        $img = $request->file('logo');

        if(isset($img))
        {
            $logo = Option::find(5);
            $name = 'logo' . uniqid() . $img->getClientOriginalName();
            $logo->option_value = $name;
            $logo->save();
            $img->move('img', $name);
        }

        $facebook = Option::find(6);
        $facebook->option_value = $request->facebook;
        $facebook->save();

        $instagram = Option::find(7);
        $instagram->option_value = $request->instagram;
        $instagram->save();

        $twitter = Option::find(8);
        $twitter->option_value = $request->twitter;
        $twitter->save();

        $youtube = Option::find(9);
        $youtube->option_value = $request->youtube;
        $youtube->save();

        return redirect(route('institute'));
    }
}
