<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.taxonomy.data.taxonomable.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation')->nullable();
            $table->integer('taxonomy_id')->unsigned();
            $table->foreign('taxonomy_id')->references('id')->on(Config::get('amethyst.taxonomy.data.taxonomy.table'));
            $table->string('taxonomable_type');
            $table->integer('taxonomable_id')->unsigend();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.taxonomy.data.taxonomable.table'));
    }
}
