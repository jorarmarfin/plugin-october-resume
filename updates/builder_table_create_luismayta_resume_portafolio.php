<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumePortafolio extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_portafolio', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('categoria');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_portafolio');
    }
}
