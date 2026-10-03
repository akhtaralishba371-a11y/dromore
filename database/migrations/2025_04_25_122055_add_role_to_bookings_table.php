<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('role')->default('rider'); // Adding the role column with default 'rider'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('role'); // Drop the role column
        });
    }
}
