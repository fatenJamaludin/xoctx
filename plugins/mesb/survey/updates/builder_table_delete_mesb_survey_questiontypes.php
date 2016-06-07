<?php namespace Mesb\Survey\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMesbSurveyQuestiontypes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mesb_survey_questiontypes');
    }
    
    public function down()
    {
        Schema::create('mesb_survey_questiontypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 100);
        });
    }
}
