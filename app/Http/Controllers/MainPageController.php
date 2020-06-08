<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function __invoke(Request $request)
    {
        $subjects = Subject::select('name', 'slug')->withCount(['themes', 'tasks'])->get();

        return view('pages.main', ['subjects' => $subjects]);
    }
}
