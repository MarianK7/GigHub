<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        // If there is a tag in the query string
        if (isset($filters['tag'])) {
            // Filter by tag
            $query->where('tags', 'like', '%' . request('tag') . '%' );
        }

        // If there is a search in the query string
        if (isset($filters['search'])) {
            // Filter by search
            $query->where('title', 'like', '%' . request('search') . '%' )
                ->orWhere('description', 'like', '%' . request('search') . '%' )
                ->orWhere('tags', 'like', '%' . request('search') . '%' )
                ->orWhere('location', 'like', '%' . request('search') . '%' );
        }
    }
}
