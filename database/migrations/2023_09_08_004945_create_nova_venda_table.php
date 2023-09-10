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
        Schema::create('nova_venda', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vendedor_id');
            $table->float('valor_venda', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vendedores', function(Blueprint $table){
            $table->dropForeign('vendedores_id_vendedor_foreign');

            $table->dropColumn('vendedor_id');
        });

        dropIfExists('vendas');
    }
};
