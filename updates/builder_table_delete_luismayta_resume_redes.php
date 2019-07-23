<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLuismaytaResumeRedes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('luismayta_resume_redes');
    }
    
    public function down()
    {
        Schema::create('luismayta_resume_redes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 191);
            $table->string('link', 191);
        });
    }
}
