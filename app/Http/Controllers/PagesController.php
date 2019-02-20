<?php

namespace App\Http\Controllers;

use App\Option;
use App\Teacher;
use App\Notice;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        $teachers = Teacher::paginate(3);

        $notices = Notice::latest()
                        ->paginate(3);

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('welcome', compact(['infos', 'teachers', 'notices']));
    }

    public function admission() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        $notices = Notice::where('topic', 'admission')
            ->latest()
            ->get();

        return view('admission')->with('infos', $infos)->with('notices', $notices);
    }

    public function result() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('result', compact('infos'));
    }

    public function teachers() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('teachers', compact('infos'));
    }

    public function gallery() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('gallery', compact('infos'));
    }

    public function contact() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('contact', compact('infos'));
    }

    public function about() {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('about', compact('infos'));
    }

    public function singlePost($id)
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        $post = Notice::find($id);

        return view('single-post')->with('infos', $infos)->with('post', $post);

        return $id;
    }
}
