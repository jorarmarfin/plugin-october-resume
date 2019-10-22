<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeHabilidades extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_habilidades', function($table)
        {
            $table->string('nombre', 191)->nullable()->change();
            $table->integer('porcentaje')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_habilidades', function($table)
        {
            $table->string('nombre', 191)->nullable(false)->change();
            $table->integer('porcentaje')->nullable(false)->change();
        });
    }
}
