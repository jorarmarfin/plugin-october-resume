<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeEducacion2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_educacion', function($table)
        {
            $table->string('rango_fecha', 191)->nullable()->change();
            $table->string('institucion', 191)->nullable()->change();
            $table->string('descripcion', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_educacion', function($table)
        {
            $table->string('rango_fecha', 191)->nullable(false)->change();
            $table->string('institucion', 191)->nullable(false)->change();
            $table->string('descripcion', 191)->nullable(false)->change();
        });
    }
}
