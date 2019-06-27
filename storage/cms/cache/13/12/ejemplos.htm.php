<?php 
use \Yo\Nombre\Models\Data;class Cms5d1536d9de7eb358645656_1f9c87736a14fd3afc0a4c7dbd3693bbClass extends Cms\Classes\PageCode
{

public function onStart(){
    
}

public function onGuardar(){
    
    $data = new Data();
    
    $data->nombre = input('nombre');
    $data->save();
    if($data->id != null){
        
      Flash::error('No se Almaceno!!!!');
    }else{
        
         Flash::success('Nombre successfully saved!');
    }
    
    
    
}
}
