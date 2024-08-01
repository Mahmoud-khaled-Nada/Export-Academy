<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskChecklistItem extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'item', 'checked'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
