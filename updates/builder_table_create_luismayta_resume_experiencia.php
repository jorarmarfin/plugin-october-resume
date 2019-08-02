<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeExperiencia extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_experiencia', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cargo')->nullable()->default('cargo');
            $table->text('descripcion')->nullable()->default('descripcion');
            $table->string('empresa')->nullable()->default('empresa');
            $table->string('rubro')->nullable()->default('rubro');
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->boolean('actual')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_experiencia');
    }
}
