<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;

class CreateTaxonomiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('ore.taxonomy.table'));
    }
}
