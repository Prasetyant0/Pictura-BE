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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('fullName')->nullable();
            $table->string('email')->unique();
            $table->text('bio')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->date('birthdate');
            $table->text('photo_profile')->nullable();
            $table->tinyInteger('account_status')->default(1);
            $table->enum('is_banned', ['isBanned', 'isNonBanned'])->default('isNonBanned');
            $table->enum('role', ['user', 'admin', 'superAdmin'])->default('user');
            $table->timestamp('ban_expiration_time')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
