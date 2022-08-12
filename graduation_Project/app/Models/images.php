<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $table = 'images';

    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'tool1',
        'tool2',
        'tool3',
        'tool4',
        'describtion',
        'user_id',
    
    ];
    public $timestamps = false;
}
