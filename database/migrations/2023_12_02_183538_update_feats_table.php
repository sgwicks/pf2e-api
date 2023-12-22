<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feats', function (Blueprint $table) {
            $table->string('traits')->nullable();
            $table->integer('level')->default(1);
            $table->string('prerequisites')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feats', function (Blueprint $table) {
            $table->dropColumn(['traits', 'level', 'prerequisites']);
        });
    }
}
