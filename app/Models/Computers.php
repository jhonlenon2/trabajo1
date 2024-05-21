<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'marca',
        'tamaño',
        'codigo',
        'sistema_operativo',
    ];
}
