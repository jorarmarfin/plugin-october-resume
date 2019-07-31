<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeSitio extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_sitio', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_sitio');
    }
}
