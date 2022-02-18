<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $table = 'artigos';

    public function autor()
    {
        return $this->belongsTo(User::class, 'fk_id_usuario', 'id');
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'artigo_categoria', 'fk_id_artigo', 'fk_id_categoria');
    }
}
