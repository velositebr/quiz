<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_id',
        'quiz_name',
        'result'
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
