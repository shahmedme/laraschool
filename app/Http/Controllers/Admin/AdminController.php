<?php

namespace App\Http\Controllers\Admin;

use App\Media;
use App\Notice;
use App\Option;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Imports\StudentResult;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard()
    {
        $imgCount = Media::whereIn('type', ['png', 'jpg', 'jpeg'])->count();
        $noticeCount = Notice::count();
        $teacherCount = Teacher::count();
        $userCount = User::count();

        return view('admin.dashboard', compact(['imgCount', 'noticeCount', 'teacherCount', 'userCount']));
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
        $user->social = $request->social;

        if($request->password != NULL)
        {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect(route('profile'));
    }

    public function mediaImages()
    {
        $images = Media::select('name')
                        ->whereIn('type', ['png', 'jpg', 'jpeg'])
                        ->latest()
                        ->paginate(49);

        return view('admin.media-img', compact('images'));
    }

    public function mediaVideos()
    {
        return view('admin.media-videos');
    }

    public function uploadView()
    {
        return view('admin.upload');
    }

    public function upload(Request $request)
    {
        $files = $request->file('files');

        if(isset($files))
        {
            foreach ($files as $file)
            {
                $name = uniqid() . $file->getClientOriginalName();
                $file->move('img/gallery', $name);

                $img = New Media;
                $img->name = $name;
                $img->type = $file->getClientOriginalExtension();

                $img->save();
            }
        }

        return redirect(route('media.img'));
    }

    public function noticeAll()
    {
        $notices = Notice::select()
                            ->latest()
                            ->paginate(12);

        return view('admin.notice-all', compact('notices'));
    }

    public function noticeNew()
    {
        return view('admin.notice-new');
    }

    public function noticeAdd(Request $request)
    {
        $notice = New Notice;

        $notice->title = $request->title;
        $notice->content = $request->body;
        $notice->topic = $request->topic;

        $img = $request->file('thumb');

        if(isset($img))
        {
            $slug = uniqid() . uniqid() . '.' . $img->getClientOriginalExtension();
            $notice->thumbnail = $slug;
            $img->move('img', $slug);
        }

        $notice->save();

        return redirect(route('notice.all'));
    }

    public function noticeEdit($id)
    {
        $notice = Notice::find($id);

        return view('admin.notice-edit', compact('notice'));
    }

    public function noticeUpdate(Request $request, $id)
    {
        $notice = Notice::find($id);

        $notice->title = $request->title;
        $notice->content = $request->body;
        $notice->topic = $request->topic;

        $img = $request->file('thumb');

        if(isset($img))
        {
            $slug = uniqid() . uniqid() . '.' . $img->getClientOriginalExtension();
            $notice->thumbnail = $slug;
            $img->move('img', $slug);
        }

        $notice->save();

        return redirect(route('notice.all'));
    }

    public function noticeDelete($id)
    {
        Notice::find($id)->delete();

        return redirect(route('notice.all'));
    }

    public function resultView()
    {
        return view('admin.result-upload');
    }

    public function resultUpload()
    {
        Excel::import(new StudentResult, request()->file('file'));

        return back();
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
