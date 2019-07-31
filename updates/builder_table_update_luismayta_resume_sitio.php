<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeSitio extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_sitio', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('titulo')->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_sitio', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('titulo', 191)->change();
        });
    }
}
