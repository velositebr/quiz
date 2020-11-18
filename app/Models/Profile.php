<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function quizes(){
        return $this->belongsToMany(Quiz::class);
    }
}
