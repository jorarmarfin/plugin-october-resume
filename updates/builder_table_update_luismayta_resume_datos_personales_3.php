<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeDatosPersonales3 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->string('slogan')->nullable()->default('My slogan');
            $table->string('perfil')->default('Chief Product Officer at Okler Themes')->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->dropColumn('slogan');
            $table->string('perfil', 191)->default('\'Chief Product Officer at Okler Themes\'')->change();
        });
    }
}
