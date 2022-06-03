<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['code','fname','lname','gender','department','position','category','user_id'];


    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
