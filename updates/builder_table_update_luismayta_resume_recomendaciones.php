<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeRecomendaciones extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_recomendaciones', function($table)
        {
            $table->string('cargo');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_recomendaciones', function($table)
        {
            $table->dropColumn('cargo');
        });
    }
}
