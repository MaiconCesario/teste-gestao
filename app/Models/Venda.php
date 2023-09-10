<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public function vendedor(){
        return $this->belongsTo('App\Models\Vendedor');
        
    }

    protected $fillable = ['vendedor_id','valor_total','comissao',];
}
