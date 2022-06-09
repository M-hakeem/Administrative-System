<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $fillable = ['code','title','fname','lname','email','phone','phone2','nationality',
    'state','lga','bname','badd','area','cac','tin','status','user_id'];

    // protected $guarded = ['id', 'updated_at', 'created_at'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('fname','like','%' . request('search') .'%')
            ->orwhere('lname','like','%' . request('search').'%')
            ->orwhere('title','like','%' . request('search').'%')
            ->orwhere('code','like','%' . request('search').'%')
            ->orwhere('bname','like','%' . request('search') .'%');
        }
    }
}

