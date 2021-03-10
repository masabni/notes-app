<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'note_id', 'comment'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            if (!app()->runningInConsole()) {
                $comment->user_id = auth()->id();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function note()
    {
        return $this->belongsTo('App\Models\Note');
    }
}
