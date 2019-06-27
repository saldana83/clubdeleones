<?php namespace Yo\Nombre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYoNombreData extends Migration
{
    public function up()
    {
        Schema::table('yo_nombre_data', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('yo_nombre_data', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
