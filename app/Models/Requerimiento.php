<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['norma_id', 'identificador', 'parrafo'];

    public function norma()
    {
        return $this->belongsTo(Norma::class);
    }
}
