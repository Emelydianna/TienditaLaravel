<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    protected $table = 'categorias'; 
    protected $primaryKey = 'codigo';
    public function cliente()
    {
        return $this->hasMany(Clientes::class, 'categoria');  
    }
}
