<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User; // 追記

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * 追記
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
