<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'referencia', 'tipo', 'user_id'];
    // protected $guarded = ['id'];

    public function requerimientos()
    {
        return $this->hasMany(Requerimiento::class);   
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organizaciones()
    {
        return $this->belongsToMany(Organizacion::class);
    }
}
