<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InsumoProduto extends Model
{
    use Notifiable;
    
    protected $table = 'insumo_produto';
    protected $fillable = [
        'insumo_id', 'produto_id', 'quantidade',
    ];
}
