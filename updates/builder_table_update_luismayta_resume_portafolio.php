<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumePortafolio extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_portafolio', function($table)
        {
            $table->string('nombre', 191)->nullable()->change();
            $table->string('categoria', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_portafolio', function($table)
        {
            $table->string('nombre', 191)->nullable(false)->change();
            $table->string('categoria', 191)->nullable(false)->change();
        });
    }
}
