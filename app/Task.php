<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Mass assignable
     */
    protected $fillable = ['name'];

    /**
     * Relations
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
