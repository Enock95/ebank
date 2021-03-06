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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('image')->nullable();
            //$table->integer('user_id')->nullable();
            $table->text('number')->nullable();
            $table->text('date')->nullable();
            $table->text('gender')->nullable();
            $table->text('name_empl')->nullable();
            $table->text('salary')->nullable();
            $table->text('residentiel')->nullable();

            $table->string('account_no')->index()->nullable();
            $table->text('type_ac')->nullable();
            $table->float('balance')->nullable();
            $table->string('cot')->nullable();
            $table->string('tax')->nullable();
            $table->string('imf')->nullable();
            $table->string('atc')->nullable();
            $table->string('telex')->nullable();
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
