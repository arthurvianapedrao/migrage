<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

public function up(): void{
    Schema::create('supplier', function (Blueprint $table) {
        $table->id();
        $table->string('adress')->index();
        $table->longText('supplier');
        $table->unsignedTinyInteger('route');
        $table->string('tip')->index();
        $table->string('price')->index();
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
