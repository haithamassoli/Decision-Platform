<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey="post_id";
    protected $fillable = [
        'post_id',
        'post_tag',
        'post_title',
        'post_body',
        'category_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
