<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armours', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            // Item attributes
            $table->integer('hardness')->default(0);
            $table->integer('max_hp')->default(0);
            $table->integer('break_threshold')->default(0);
            $table->float('bulk')->default(0);
            $table->float('price')->default(0);
            // Armour attributes
            $table->string('category');
            $table->integer('armour_class')->default(0);
            $table->integer('dex_cap')->nullable();
            $table->integer('check_penalty')->default(0);
            $table->integer('speed_penalty')->default(0);
            $table->integer('strength')->default(0);
            $table->string('traits')->nullable();
            $table->string('group')->nullable();

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
        Schema::dropIfExists('armours');
    }
}
