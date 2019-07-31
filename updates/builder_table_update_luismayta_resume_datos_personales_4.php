<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeDatosPersonales4 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->text('descripcion')->nullable()->default('Description');
            $table->string('perfil')->default('Chief Product Officer at Okler Themes')->change();
            $table->string('slogan')->default('My slogan')->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->dropColumn('descripcion');
            $table->string('perfil', 191)->default('\'Chief Product Officer at Okler Themes\'')->change();
            $table->string('slogan', 191)->default('\'My slogan\'')->change();
        });
    }
}
