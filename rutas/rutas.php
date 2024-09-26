<?php

$array=explode("/",$_SERVER["REQUEST_URI"]);
//var_dump($array);

if(count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin solicitudes",
    );
    echo json_encode($json,true);
}else{
    if(count(array_filter($array))==4){

        if(array_filter($array)[4]=="cursos"){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
                $cursos=new ControladorCursos();
                $cursos->index();
            }
        }

    }
}

?>