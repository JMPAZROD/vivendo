<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageProject extends Model
{
    use SoftDeletes;

    protected $table    = 'image_project';
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'project_id',
        'file'
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y h:i A',
        'updated_at' => 'date:d-m-Y h:i A',
        'deleted_at' => 'date:d-m-Y h:i A',
    ];
}
