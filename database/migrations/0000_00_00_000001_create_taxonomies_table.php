<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('ore.taxonomy.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('vocabulary_id')->unsigned()->nullable();
            $table->foreign('vocabulary_id')->references('id')->on(Config::get('ore.vocabulary.table'));
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('ore.taxonomy.table'));
    }
}
