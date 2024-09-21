<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laraJob extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->
            orWhere('description', 'like', '%' . request('search') . '%')->
            orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
