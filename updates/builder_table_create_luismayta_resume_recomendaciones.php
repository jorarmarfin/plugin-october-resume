<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeRecomendaciones extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_recomendaciones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('referencia');
            $table->text('recomendacion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_recomendaciones');
    }
}
