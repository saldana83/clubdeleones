<?php 
use \Yo\Nombre\Models\Data;class Cms5d2a9ba8b7c47862310038_ebb292941d42a51331db1910d6130195Class extends Cms\Classes\PageCode
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
