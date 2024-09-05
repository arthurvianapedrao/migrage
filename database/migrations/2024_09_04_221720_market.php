<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('market', function (Blueprint $table) {
        $table->id();
        $table->string('cnpj')->index();
        $table->longText('owen');
        $table->unsignedTinyInteger('adress');
        $table->string('materials')->index();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};
