<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeEducacion extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_educacion', function($table)
        {
            $table->string('institucion', 191);
            $table->string('descripcion', 191);
            $table->dropColumn('titulo');
            $table->dropColumn('subtitulo');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_educacion', function($table)
        {
            $table->dropColumn('institucion');
            $table->dropColumn('descripcion');
            $table->string('titulo', 191);
            $table->string('subtitulo', 191);
        });
    }
}
