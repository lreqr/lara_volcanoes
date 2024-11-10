<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volcanoes extends Model
{

    protected $primaryKey = 'volcano_id'; // указываем новое имя первичного ключа

    protected $fillable = [
        'volcano_id',
        'title',
        'description',
        'latitude',
        'longitude',
        'elevation_meters',
        'newest_notice_url',
        'volcano_url',
        'volcano_image_url'
    ];
}
