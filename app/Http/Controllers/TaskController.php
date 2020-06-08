<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Task;
use App\Theme;

class TaskController extends Controller
{
    public function index(Subject $subject, Theme $theme)
    {
        return view('pages.tasks', [
            'theme' => $theme,
            'sub' => $subject
        ]);
    }

    public function show(Subject $subject, Theme $theme)
    {
        return Task::where([
            ['subject_id', $subject->id],
            ['theme_id', $theme->id],
        ])->get()->map(function($task){
            return [
                'id' => $task->id,
                'description' => $task->description,
                'answer' => $task->answer,
                'theme_id'=> $task->theme_id,
            ];
        });
    }
}
