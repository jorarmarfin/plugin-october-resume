<?php namespace LuisMayta\Resume\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaResumeReferencias extends Migration
{
    public function up()
    {
        Schema::table('luismayta_resume_referencias', function($table)
        {
            $table->string('nombre', 191)->nullable()->change();
            $table->string('cargo', 191)->nullable()->change();
            $table->text('testimonio')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_resume_referencias', function($table)
        {
            $table->string('nombre', 191)->nullable(false)->change();
            $table->string('cargo', 191)->nullable(false)->change();
            $table->text('testimonio')->nullable(false)->change();
        });
    }
}
