<?php

use Illuminate\Database\Seeder;



class clientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void     */
    public function run()
    {
        DB::insert('insert into clientes
    (nome,cpf,cep,logradouro,complemento,bairro,localidade,uf,numero,telefone,ibge)
    values (?,?,?,?,?,?,?,?,?,?,?)',array('Luiz','251.845.804.59','52070-230','Rua tal',
            'perto','casa forte','recife','pe','4214','81.99940-4451','2611606'));

        DB::insert('insert into clientes
    (nome,cpf,cep,logradouro,complemento,bairro,localidade,uf,numero,telefone,ibge)
    values (?,?,?,?,?,?,?,?,?,?,?)',array('Paula','9999999999','69070-230','Rua tal2',
            'perto2','casa forte2','recife','pe','4214','81.99999999','2611606'));

        DB::insert('insert into clientes
    (nome,cpf,cep,logradouro,complemento,bairro,localidade,uf,numero,telefone,ibge)
    values (?,?,?,?,?,?,?,?,?,?,?)',array('bia','951.845.804.52','99070-230','Rua tal3',
            'perto3','casa forte','recife','pe','4214','81.99940-4459','2611606'));



        
    }
}
