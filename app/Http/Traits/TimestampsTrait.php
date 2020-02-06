<?php

namespace App\Http\Traits;


trait TimestampsTrait{
    public timestamps = true;

    public function getDate(){
        return ['created_at', 'updated_at'];
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attritbut['created_at'])->diffForHumans();
    }

    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attribute['updated_at'])->diffForHumans();
    }
}