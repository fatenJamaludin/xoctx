<?php namespace mesb\Muse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMesbMuseServices extends Migration
{
    public function up()
    {
        Schema::create('mesb_muse_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->integer('agency_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mesb_muse_services');
    }
}
