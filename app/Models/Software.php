<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'software';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'serial',
        'tipo_licencia',
        'tipo_software',
        'created_at',
        'updated_at',
        'id_dispositivo',
    ];

    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class);
    }
}
