<?php

namespace App\Http\Controllers;

use App\Media;
use App\Option;
use App\Teacher;
use App\Notice;
use App\Result;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
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

    public function admission()
    {
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

    public function result()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('result', compact('infos'));
    }

    public function resultView(Request $request)
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        $result = Result::where([
            ['student_id', '=', $request->id],
            ['semester', '=', $request->semester]
        ])->first();

        $totalNumber = 0;
        $subj = array($result->bangla, $result->english, $result->math, $result->physics, $result->biology, $result->chemistry);
        $subjArray = array();

        foreach($subj as $id => $sub)
        {
            $totalNumber += $sub;

            switch ($sub)
            {
                case '0':
                    $subjArray[$id] = 'F';
                    break;

                case ($sub >= 80 && $sub <=100):
                    $subjArray[$id] = 'A+';
                    break;

                case ($sub >= 70 && $sub <= 79):
                    $subjArray[$id] = 'A';
                    break;

                case ($sub >= 60 && $sub <= 69):
                    $subjArray[$id] = 'A-';
                    break;

                case ($sub >= 50 && $sub <= 59):
                    $subjArray[$id] = 'B';
                    break;

                case ($sub >= 40 && $sub <= 49):
                    $subjArray[$id] = 'C';
                    break;

                case ($sub >= 33 && $sub <= 39):
                    $subjArray[$id] = 'D';
                    break;

                case ($sub < 33 && $sub >= 0):
                    $subjArray[$id] = 'F';
                    break;

                default:
                    $subjArray[$id] = 'N/A';
            }
        }

        return view('result-view', compact('infos', 'result', 'totalNumber', 'subjArray'));
    }

    public function teachers()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        $teachers = Teacher::all();

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('teachers')->with('infos', $infos)->with('teachers', $teachers);
    }

    public function gallery()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        $images = Media::whereIn('type', ['jpg', 'png', 'jpeg'])
            ->latest()
            ->get();

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('gallery', compact('infos', 'images'));
    }

    public function contact()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('contact', compact('infos'));
    }

    public function about()
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        return view('about', compact('infos'));
    }

    public function singlePost($idd)
    {
        $options = Option::all();
        $infos = array('hi', 'ok');

        foreach ($options as $id=>$option)
        {
            $infos[$id] = $option->option_value;
        }

        $post = Notice::find($idd);

        return view('single-post')->with('infos', $infos)->with('post', $post);
    }
}
