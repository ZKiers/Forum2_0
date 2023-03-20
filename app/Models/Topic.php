<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'thread_id',
        'user_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function replies(): HasMany {
        return $this->hasMany(Reply::class);
    }
    public function thread(): BelongsTo {
        return $this->belongsTo(Thread::Class);
    }
}
