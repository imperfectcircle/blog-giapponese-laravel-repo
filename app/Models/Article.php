<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'image',
        'body',
        'author',
    ];

    public function user() {
        $this->belongsTo(User::class);
    }
}


