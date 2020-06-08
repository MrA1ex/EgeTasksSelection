<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
