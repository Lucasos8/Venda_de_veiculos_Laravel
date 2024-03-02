<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = ['id', 'nome', 'ano', 'marca', 'cilindrada', 'cilindrada', 'descrição', 'valor', 'image'];

}
