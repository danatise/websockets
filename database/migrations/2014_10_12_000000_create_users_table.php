<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->string('fname')->default('kasmin');
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('username',40)->unique()->nullable();

            $table->integer('school_id')->unsigned()->default(1);

            $table->integer('plan_id')->unsigned()->default(1);
            $table->string('role',30)->default('individual');

            $table->boolean('is_active')->nullable();
            $table->string('phone', 40)->nullable();

            $table->string('password');
           
            $table->rememberToken();
            $table->timestamps();
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
