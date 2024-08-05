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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->text('address');
            $table->string('phone_number');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('bust')->nullable();
            $table->integer('abdomen')->nullable();
            $table->integer('hip')->nullable();
            $table->integer('thigh')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('img_name');
            $table->string('img_path');
            $table->enum('activated', ['pending_verification', 'pending_approval', 'active', 'inactive'])->default('pending_verification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
