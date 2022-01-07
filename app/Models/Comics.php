<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;

    protected $table = 'comics';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'description',
        'ean',        
        'prices',
        'images',
    ];
}