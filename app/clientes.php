<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{




    //Função para trocar o valor empty para null
    public static function boot() {
        parent::boot();

        static::creating(function($model){
            foreach ($model->toArray() as $key => $value) {
                $model->{$key} = empty($value) ? null : $value;
            }
        });
    }


    protected $table = 'clientes';

    protected $fillable = ['nome','cpf','cep','logradouro',
        'complemento','bairro','localidade','uf','numero','telefone','ibge'];



}
