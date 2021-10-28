<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Username extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'user_id',
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
}
