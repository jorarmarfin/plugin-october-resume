<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaResumeReferencias extends Migration
{
    public function up()
    {
        Schema::create('luismayta_resume_referencias', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('cargo');
            $table->text('testimonio');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_resume_referencias');
    }
}
