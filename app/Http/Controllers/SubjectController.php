<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Theme;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show($slug)
    {
        $subject = Subject::where('slug', $slug)->firstOrFail(['id', 'name']);;

        $themes = Theme::where('subject_id', $subject->id)->withCount(['tasks'])->get();

        return view('pages.subject', ['themes' => $themes, 'name' => $subject->name]);
    }
}
