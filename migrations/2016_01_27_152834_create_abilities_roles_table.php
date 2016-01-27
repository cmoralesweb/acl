<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anavel_acl_abilities_roles', function (Blueprint $table) {
            $table->unsignedInteger('ability_id');
            $table->unsignedInteger('role_id');

            $table->foreign('ability_id')
                ->references('id')->on('abilities')
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')->on('roles')
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
        Schema::drop('anavel_acl_abilities_roles');
    }
}
