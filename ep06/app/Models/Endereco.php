<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_id_user', 'id');
    }
}
