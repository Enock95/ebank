<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('phone')->nullable();
            $table->text('name_empl')->nullable();
            $table->string('receiver')->nullable();
            $table->text('type_empl')->nullable();
            $table->text('cot')->nullable();
            $table->biginteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict'); 
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
        Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_user_id_foreign');
		});
        Schema::dropIfExists('transferes');
    }
}
