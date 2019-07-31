<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeDatosPersonales extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->text('redes_sociales')->nullable();
            $table->string('nombre_completo', 191)->nullable()->change();
            $table->string('nombre_corto', 191)->nullable()->change();
            $table->string('fecha_nacimiento', 191)->nullable()->change();
            $table->string('estado_civil', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_datos_personales', function($table)
        {
            $table->dropColumn('redes_sociales');
            $table->string('nombre_completo', 191)->nullable(false)->change();
            $table->string('nombre_corto', 191)->nullable(false)->change();
            $table->string('fecha_nacimiento', 191)->nullable(false)->change();
            $table->string('estado_civil', 191)->nullable(false)->change();
        });
    }
}
