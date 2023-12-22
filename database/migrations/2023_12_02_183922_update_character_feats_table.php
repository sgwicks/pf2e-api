<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCharacterFeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_feats', function (Blueprint $table) {
            $table->integer('chosen_level')->default(1);
            $table->char('type', 1)->default('G');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_feats', function (Blueprint $table) {
           $table->dropColumn(['chosen_level', 'type']);
        });
    }
}
