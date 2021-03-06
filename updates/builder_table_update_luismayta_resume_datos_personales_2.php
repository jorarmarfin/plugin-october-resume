<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeDatosPersonales2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->string('perfil')->nullable()->default('Chief Product Officer at Okler Themes');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->dropColumn('perfil');
        });
    }
}
