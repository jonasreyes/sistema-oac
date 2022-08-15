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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('state_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->foreignId('municipality_id')->constrained()->cascadeOnDelete();
            $table->foreignId('parish_id')->constrained()->cascadeOnDelete();
            $table->string('address', 100);
            $table->string('cod_postal', 100);
            $table->decimal('latitude', 11, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('name');
            $table->char('siglas');
            $table->text('competencias');
            $table->string('fullname_authority', 50);
            $table->string('email');
            $table->string('web');
            $table->string('emblema');
            $table->string('twitter');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('venapp');
            $table->string('vk');
            $table->string('tiktok');
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
        Schema::dropIfExists('entities');
    }
};
