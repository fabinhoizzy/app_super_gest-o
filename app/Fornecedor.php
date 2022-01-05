<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //usado para alterar o nome do model no bando de dados de fornecedors para fornecedores
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome','site','uf','email'];

    public function produtos() {
        return $this->hasMany('App\Item','fornecedor_id','id');
        //return $this->hasMany('App\Item');
    }
}
