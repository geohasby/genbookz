<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable()->after('password');
            $table->string('country')->nullable()->after('phone_number');
            $table->date('date_of_birth')->nullable()->after('country');
            $table->string('gender')->nullable()->after('date_of_birth');
            $table->string('avatar')->nullable()->default('default.jpg')->after('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'country', 'date_of_birth', 'gender', 'avatar']);
        });
    }
}
