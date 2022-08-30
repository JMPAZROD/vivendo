<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table    = 'project';
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
        'description',
        'city_id',
        'builder_id',
        'category_id',
        'address',
        'num_rooms',
        'num_bathrooms',
        'price'
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y h:i A',
        'updated_at' => 'date:d-m-Y h:i A',
        'deleted_at' => 'date:d-m-Y h:i A',
    ];
}
