<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'comment',
        'user_id',
        'post_id',
        'created_at',
        'updated_at'
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
//     public function post()
// {
//     return $this->belongsTo(Post::class);
// }
}

