<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;
    protected $table = 'formats';

    protected $fillable = [
        'name',
        'state'
    ];

    protected $cast = [
        'created_at' => 'datatime:Y-m-d H:i:s',
        'updated_at' => 'datatime:Y-m-d H:i:s'
    ];
}
