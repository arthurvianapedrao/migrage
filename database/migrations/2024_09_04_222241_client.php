<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('client', function (Blueprint $table) {
        $table->id();
        $table->string('cpg')->index();
        $table->longText('client');
        $table->unsignedTinyInteger('adress');
        $table->string('rg')->index();
        $table->string('buy')->index();
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
