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
        Schema::create('petowner', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('email')->unique();
            $table->string('phonenumber',15)->nullable();
            $table->string('password');
            $table->string('username')->nullable();
            $table->integer('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('description',100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petowner');
    }
};
