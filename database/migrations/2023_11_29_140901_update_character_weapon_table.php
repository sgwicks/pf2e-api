<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCharacterWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_weapons', function (Blueprint $table) {
            // Item attributes
            $table->tinyInteger('hardness')->nullable();
            $table->tinyInteger('max_hp')->nullable();
            $table->tinyInteger('break_threshold')->nullable();
            $table->float('bulk')->nullable();
            $table->float('price')->nullable();

            // Weapon attributes
            $table->char('category', 1)->nullable();
            $table->integer('range')->nullable();
            $table->tinyInteger('damage_die_type')->nullable();
            $table->tinyInteger('damage_die_amount')->nullable();
            $table->char('damage_type', 1)->nullable();
            $table->tinyInteger('reload')->nullable();
            $table->tinyInteger('hands')->nullable();
            $table->string('group')->nullable();
            $table->string('traits')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_weapons', function (Blueprint $table) {
            $table->dropColumn([
                'hardness',
                'max_hp',
                'break_threshold',
                'bulk',
                'price',
                'category',
                'range',
                'damage_die_type',
                'damage_die_amount',
                'damage_type',
                'reload',
                'hands',
                'group',
                'traits'
            ]);
        });
    }
}
