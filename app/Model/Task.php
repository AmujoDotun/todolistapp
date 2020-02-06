<?php

namespace App\Model;

use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;

    //define the table
    protected $table = 'tasks';
}
