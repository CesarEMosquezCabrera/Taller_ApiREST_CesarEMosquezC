<?php

$array=explode("/",$_SERVER["REQUEST_URI"]);
//var_dump($array);

if(count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin solicitudes",
    );
    echo json_encode($json,true);
}else{
    //utilizo el 4 por que tengo el archivo en otro lado
    if(count(array_filter($array))==4){

        if(array_filter($array)[4]=="cursos"){


            //ver lista de cursos
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
                $cursos=new ControladorCursos();
                $cursos->index();
            }
        }

    }
}

?>