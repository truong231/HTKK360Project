<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'email', 'password','name','phone','warehouse','type',
    ];

    protected $primaryKey = 'id';
    protected $table = 'users';
}
