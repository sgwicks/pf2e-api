<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shields', function (Blueprint $table) {
            $table->id();

            // Item attributes
            $table->string('name')->unique();
            $table->tinyInteger('hardness')->default(0);
            $table->tinyInteger('max_hp')->default(0);
            $table->tinyInteger('break_threshold')->default(0);
            $table->float('bulk')->default(0);
            $table->float('price')->default(0);

            // Shield attributes
            $table->integer('armour_class')->default(0);

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
        Schema::dropIfExists('shields');
    }
}
