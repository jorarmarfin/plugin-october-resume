<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeEducacion extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_educacion', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('rango_fecha');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_educacion');
    }
}
