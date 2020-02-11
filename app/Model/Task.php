<?php

namespace App\Model;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;
    use TasksTrait;

    public function getDate(){
        return ['created_at', 'updated_at', 'due_date'];
    }

    //define the table
    protected $table = 'tasks';
}
