<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getCreatedAtFormattedAttribute($created_at)
    {
        return Carbon::parse($created_at)->format("Y-m-d");
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
