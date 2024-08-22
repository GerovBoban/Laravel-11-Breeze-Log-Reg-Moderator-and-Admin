<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Txtwelcome extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'img_lnk',
    //     'user_id',
    //     // 'img_name',
    //     // 'txt_1',
    //     // 'txt_2',
    //     // 'txt_3',
    //     // 'description_3'
    //  ];
    protected $fillable = ['img_lnk', 'image', 'user_id', 'img_name', 'txt_1', 'txt_2', 'language_3', 'txt_3', 'Yes_No'];
}
