<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->uuid('photo_id')->nullable();
			// account information
			$table->string('name')->nullable();
			$table->string('username')->unique();
			$table->string('slug')->unique();
			$table->string('email')->unique();
			$table->string('password');

			// personal information
			$table->boolean('is_agent')->default('0');
			$table->string('description')->nullable();
			$table->integer('phone');
			$table->string('location');

			$table->rememberToken();
			$table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
