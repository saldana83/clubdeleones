<?php 
use \Yo\Nombre\Models\Data;class Cms5d17ff78bf9c5663367792_c27e52c4fe927417e8eb3a8625601e2dClass extends Cms\Classes\PageCode
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
