<?php

namespace App\Http\Traits;

use Carbon\Carbon;


trait TasksTrait{

    public $dueDateFormating = true;

    public function getDueDateAttribute($value){
        if($this->dueDateFormating){
            return Carbon::parse($value)->toFormattedDateString();
        }else{
            return $this->attributes['due_date'] = $value;
        }
    }
}