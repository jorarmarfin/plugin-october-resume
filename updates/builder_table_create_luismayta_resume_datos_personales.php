<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeDatosPersonales extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_datos_personales', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_completo');
            $table->string('nombre_corto');
            $table->string('fecha_nacimiento');
            $table->string('estado_civil');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_datos_personales');
    }
}
