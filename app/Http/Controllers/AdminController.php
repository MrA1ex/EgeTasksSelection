<?php

namespace App\Http\Controllers;

use App\Modules\Parser;
use App\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke(Request $request, $token)
    {
        if($token === '123'){
            $parser = new Parser();

            $tasks = $parser->getContent('https://mathb-ege.sdamgia.ru/test?theme=55&print=true');

//            foreach ($tasks as $task){
//                $new_task = new Task();
//                $new_task->description = $task[0];
//                $new_task->answer = $task[1];
//                $new_task->subject_id = 1;
//                $new_task->theme_id = 6;
//                $new_task->save();
//            }

            return view('admin.pages.main', ['tasks' => $tasks]);
        }
    }
}
