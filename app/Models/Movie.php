<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $fillable = [
        'name',
        'synopsis',
        'year',
        'duration',
        'price',
        'format_id',
        'image'
    ];

    protected $cast = [
        'created_at' => 'datatime:Y-m-d H:i:s',
        'updated_at' => 'datatime:Y-m-d H:i:s'
    ];
    public function format()
    {
        return $this->hasOne(Format::class, 'id', 'format_id');
    }
}
