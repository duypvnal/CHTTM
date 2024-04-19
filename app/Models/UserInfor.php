<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfor extends Model
{
    use HasFactory;

    protected $table = 'user_infors';

    protected $fillable = [
        'user_id',
        'image',
        'address',
        'gender',
        'created_at'
    ];
}
