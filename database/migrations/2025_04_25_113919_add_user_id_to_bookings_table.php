<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToBookingsTable extends Migration
{
    // Add the user_id column to bookings table
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Check if the 'user_id' column does not exist before adding it
            if (!Schema::hasColumn('bookings', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('destination');
            }
        });
    }

    // Remove the user_id column from bookings table
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop the column if it exists
            if (Schema::hasColumn('bookings', 'user_id')) {
                $table->dropColumn('user_id');
            }
        });
    }
}
