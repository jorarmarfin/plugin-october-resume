<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeIdiomas2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_idiomas', function($table)
        {
            $table->string('bandera')->nullable();
            $table->string('idioma')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_idiomas', function($table)
        {
            $table->dropColumn('bandera');
            $table->string('idioma', 191)->default('NULL')->change();
        });
    }
}
