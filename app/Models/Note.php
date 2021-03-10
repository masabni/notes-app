<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Note extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['user_id', 'title', 'content', 'published'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            if (!app()->runningInConsole()) {
                $note->user_id = auth()->id();
                $note->published = request()->has('published') ? '1' : '0';
                $note->{$note->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->latest();
    }

    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }
}
