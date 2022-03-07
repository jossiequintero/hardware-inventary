<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;
    protected $table = 'dispositivo';
    protected $primarykey = 'id';
    protected $fillable = [
        'tipo',
        'descripcion',
        'marca',
        'modelo',
        'numero_serie',
        'numero_identificacion',
        'fecha_instalacion',
        'fecha_mantenimiento',
        'estado',
        'id_area',
        'created_at',
        'updated_at',
    ];
    public function software(){
        return $this->hasMany(Software::class);
    }
    public function componente(){
        return $this->hasMany(Componente::class);
    }
}
