<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeHabilidades extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_habilidades', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->integer('porcentaje');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_habilidades');
    }
}
