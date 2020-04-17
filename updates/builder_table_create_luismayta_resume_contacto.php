<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeContacto extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_contacto', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('remitente');
            $table->string('asunto');
            $table->text('mensaje');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_contacto');
    }
}
