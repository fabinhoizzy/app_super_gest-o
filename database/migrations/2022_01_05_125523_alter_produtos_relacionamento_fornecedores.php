<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a coluna em produtos que vai receber a fk de fornecedores
        Schema::table('produtos', function(Blueprint $table) {

            //insere um registro de fornecedor para estabelecer o relacionamento
            DB::table('fornecedores')->insert([
                'nome' => 'Fornecedor Padrão SG',
                'site' => 'fornecedorpadraosg.com.br',
                'uf' => 'SP',
                'email' => 'contato@fornecedorpadraosg.com.br'
            ]);

            $table->unsignedBigInteger('fornecedores_id')->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
