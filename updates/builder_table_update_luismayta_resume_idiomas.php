<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeIdiomas extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_idiomas', function($table)
        {
            $table->string('idioma', 191)->nullable()->change();
            $table->string('nivel', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_idiomas', function($table)
        {
            $table->string('idioma', 191)->nullable(false)->change();
            $table->string('nivel', 191)->nullable(false)->change();
        });
    }
}
