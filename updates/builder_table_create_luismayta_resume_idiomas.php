<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeIdiomas extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_idiomas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('idioma');
            $table->string('nivel');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_idiomas');
    }
}
