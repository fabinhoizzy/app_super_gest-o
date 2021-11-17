<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(61) 99999-8888';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja Bem-vindo ao sistema Super Gestão';
        $contato->save();
    }
}
