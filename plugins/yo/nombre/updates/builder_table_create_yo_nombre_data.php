<?php namespace Yo\Nombre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYoNombreData extends Migration
{
    public function up()
    {
        Schema::create('yo_nombre_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('nombre');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yo_nombre_data');
    }
}
