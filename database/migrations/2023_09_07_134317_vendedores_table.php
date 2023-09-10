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
        Schema::create('vendedores', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome_vendedor', 40);
            $table->string('email')->unique();
            $table->string('senha');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        dropIfexists('vendedores');
    }
};
