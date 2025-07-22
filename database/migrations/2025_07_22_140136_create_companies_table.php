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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('description')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('address')->nullable();
            $table->integer('price')->default(0);
            $table->integer('balans')->default(0);
            $table->boolean('paymart')->default(false);
            $table->integer('start')->default(0);
            $table->integer('start_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
