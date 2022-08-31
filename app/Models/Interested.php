<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interested extends Model
{
    use SoftDeletes;

    protected $table    = 'interested';
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'country',
        'project_id'
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y h:i A',
        'updated_at' => 'date:d-m-Y h:i A',
        'deleted_at' => 'date:d-m-Y h:i A',
    ];
}
