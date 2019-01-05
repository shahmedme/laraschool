<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.institute');
    }
}
