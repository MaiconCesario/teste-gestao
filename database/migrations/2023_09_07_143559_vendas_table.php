<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendas', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('vendedor_id');
            $table->float('valor_total', 8, 2);
            $table->float('comissao', 8, 2);
            $table->date('data_venda');
            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            
        });

     }

    public function down(): void
    {
        Schema::table('vendedores', function(Blueprint $table){
            $table->dropForeign('vendedores_id_vendedor_foreign');

            $table->dropColumn('vendedor_id');
        });

        dropIfExists('vendas');
        }
};
