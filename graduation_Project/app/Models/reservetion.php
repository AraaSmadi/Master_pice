<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservetion extends Model
{
    protected $table = 'reservetions';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'hour',
        'user_id',
        'role'


    ];
    public $timestamps = false;
    use HasFactory;
}
