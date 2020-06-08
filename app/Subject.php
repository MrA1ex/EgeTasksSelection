<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function path()
    {
        return route('subjects.show', $this->slug);
    }

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
