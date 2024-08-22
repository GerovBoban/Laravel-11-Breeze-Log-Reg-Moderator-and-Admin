<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'language_1',
    //     'user_id',
    //     // 'description_1',
    //     // 'language_2',
    //     // 'description_2',
    //     // 'language_3',
    //     // 'description_3'
    //  ];
    protected $fillable = ['Yes_No', 'language_1', 'user_id', 'description_1', 'language_2', 'description_2', 'language_3', 'description_3'];
}
