<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attentions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null')->cascadeOnUpdate();  
            $table->foreignId('entity_id')->constrained()->cascadeOnDelete();
            $table->foreignId('state_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->foreignId('municipality_id')->constrained()->cascadeOnDelete();
            $table->foreignId('parish_id')->constrained()->cascadeOnDelete();
            $table->string('address', 100);
            $table->date('attention_date');
            $table->text('asunto');
            $table->string('num_ident', 20);
            $table->string('nombre1', 20);
            $table->string('nombre2', 20);
            $table->string('apellido1', 20);
            $table->string('apellido2', 20);
            $table->string('telefono1', 20);
            $table->string('telefono2', 20);
            $table->string('email', 50);
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('status_id')->constrained()->cascadeOnDelete();
            $table->text('observacion');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attentions');
    }
};
