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
            $table->tinyInteger('hardness')->default(0);
            $table->tinyInteger('max_hp')->default(0);
            $table->tinyInteger('break_threshold')->default(0);
            $table->float('bulk')->default(0);
            $table->float('price')->default(0);

            // Weapon attributes
            $table->char('category', 1)->default('S');
            $table->integer('range')->default(5);
            $table->tinyInteger('damage_die_type')->default(6);
            $table->tinyInteger('damage_die_amount')->default(1);
            $table->char('damage_type', 1)->default('B');
            $table->tinyInteger('reload')->default(0);
            $table->tinyInteger('hands')->default(1);
            $table->string('group');
            $table->string('traits')->nullable();

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
