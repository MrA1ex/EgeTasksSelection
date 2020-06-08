<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function path()
    {
        return route('tasks.index', ['subject' => $this->subject, 'theme' => $this]);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
