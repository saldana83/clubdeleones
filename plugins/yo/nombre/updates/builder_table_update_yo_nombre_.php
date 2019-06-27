<?php namespace Yo\Nombre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYoNombre extends Migration
{
    public function up()
    {
        Schema::table('yo_nombre_', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('yo_nombre_', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
