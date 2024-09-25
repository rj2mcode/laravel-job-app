<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laraJob extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'tags', 'description','logo','user_id'];

    public function scopeFilter($query, array $filters)
    {
        //filter tags
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        //filter search result
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
