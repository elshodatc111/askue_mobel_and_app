<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addres');
            $table->string('description');
            $table->string('logo_image');
            $table->enum('status', ['active', 'cancel'])->default('active');
            $table->bigInteger('balans')->default(0);
            $table->bigInteger('paymart')->default(0);
            $table->string('star')->default(5);
            $table->bigInteger('star_count')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('companies');
    }
};
