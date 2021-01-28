<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storypost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'post_date',
        'story',
    ];
}
