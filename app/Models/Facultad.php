<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $table='facultad';
    protected $primarykey='id';
    protected $fillable = [
        'nombre',
        'created_at',
        'updated_at',
    ];
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
