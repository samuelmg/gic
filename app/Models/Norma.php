<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'referencia', 'tipo'];
    // protected $guarded = ['id'];

    public function requerimientos()
    {
        return $this->hasMany(Requerimiento::class);
    }
}
