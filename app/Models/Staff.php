<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['code','fname','lname','email','phone','gender','department','position','category','user_id'];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('fname','like','%' . request('search') . '%')
            ->orwhere('lname','like','%' . request('search') . '%')
            ->orwhere('department','like','%' . request('search') . '%')
            ->orwhere('position','like','%' . request('search') . '%')
            ->orwhere('code','like','%' . request('search') .'%');
        }
    }
}
