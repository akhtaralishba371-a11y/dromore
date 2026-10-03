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
        // Create users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Create password_reset_tokens table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Create sessions table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index(); // Foreign key linking to users table
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Create bookings table
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key linking to users table
            $table->string('pickup_location');
            $table->string('destination');
            $table->datetime('pickup_datetime');
            $table->string('phone');
            $table->integer('people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop bookings table first to avoid constraint issues
        Schema::dropIfExists('bookings');
        // Drop sessions table
        Schema::dropIfExists('sessions');
        // Drop password_reset_tokens table
        Schema::dropIfExists('password_reset_tokens');
        // Drop users table
        Schema::dropIfExists('users');
    }
};
