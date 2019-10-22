<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeSitio2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_sitio', function($table)
        {
            $table->string('titulo', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_sitio', function($table)
        {
            $table->string('titulo', 191)->nullable(false)->change();
        });
    }
}
