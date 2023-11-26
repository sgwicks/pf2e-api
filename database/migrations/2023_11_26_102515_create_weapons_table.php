<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();

            // Item attributes
            $table->string('name')->unique();
            $table->integer('hardness')->default(0);
            $table->integer('max_hp')->default(0);
            $table->integer('break_threshold')->default(0);
            $table->float('bulk')->default(0);
            $table->float('price')->default(0);

            // Weapon attributes
            $table->integer('damage_die_type')->default(6);
            $table->integer('damage_die_amount')->default(1);
            $table->integer('hands')->default(1);
            $table->string('group')->nullable();
            $table->string('traits')->nullable();
            $table->string('damage_type')->default('bludgeoning');

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
        Schema::dropIfExists('weapons');
    }
}
