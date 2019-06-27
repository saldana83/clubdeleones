<?php namespace Yo\Nombre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYoNombre extends Migration
{
    public function up()
    {
        Schema::create('yo_nombre_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('nombre');
            $table->text('apellido');
            $table->date('fechanacimiento');
            $table->decimal('telefono', 10, 0);
            $table->text('correoelectronico');
            $table->date('fechaingreso');
            $table->binary('estado');
            $table->string('usuario');
            $table->string('contrasena');
            $table->string('cedula');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yo_nombre_');
    }
}
