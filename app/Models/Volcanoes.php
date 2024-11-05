<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volcanoes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var $fillable array
     */
    protected $fillable = [
        'volcano_id',
        'title',
        'latitude',
        'longitude',
        'elevation_meters',
        'newest_notice_url',
        'volcano_url',
        'volcano_image_url'
    ];
}
