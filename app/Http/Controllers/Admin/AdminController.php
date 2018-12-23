<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
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
