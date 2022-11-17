<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dailyPost extends Model{
    use HasFactory;
    protected $table = 'daily_post';
    protected $fillable=[
        'title', 'image', 'detail'
    ];
}
