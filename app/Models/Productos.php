<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'codigo';
    public function marca()
    {
        return $this->belongsTo(Marcas::class, 'marca' );      
    }
}
