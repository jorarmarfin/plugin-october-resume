<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeRedes extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_redes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_redes');
    }
}
