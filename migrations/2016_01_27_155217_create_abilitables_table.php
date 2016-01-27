<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anavel_acl_abilitables', function (Blueprint $table) {
            $table->unsignedInteger('ability_id');
            $table->integer('abilitable_id')->index();
            $table->string('abilitable_type')->index();

            $table->foreign('ability_id')
                ->references('id')->on('abilities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anavel_acl_abilitables');
    }
}
