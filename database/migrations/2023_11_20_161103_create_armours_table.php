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

            // Item attributes
            $table->string('name')->unique();
            $table->tinyInteger('hardness')->default(0);
            $table->tinyInteger('max_hp')->default(0);
            $table->tinyInteger('break_threshold')->default(0);
            $table->float('bulk')->default(0);
            $table->float('price')->default(0);

            // Armour attributes
            $table->char('category', 1);
            $table->tinyInteger('armour_class')->default(0);
            $table->tinyInteger('dex_cap')->nullable();
            $table->tinyInteger('check_penalty')->default(0);
            $table->tinyInteger('speed_penalty')->default(0);
            $table->tinyInteger('strength')->default(0);
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
