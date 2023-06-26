<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    /**
     * Get the task that owns the user.
     */

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
