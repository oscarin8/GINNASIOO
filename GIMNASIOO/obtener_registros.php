<?php

include("conexion.php");
include("funciones.php");

$query = "";
$salida = array();
$query = "SELECT * FROM usuarios ";

if (isset($_POST["search"]["value"])){
$query .= 'WHERE nombre LIKE "%'. $_POST["search"]["value"] .'%"';
$query .= 'OR apellido LIKE "%'. $_POST["search"]["value"] .'%"';
}

if (isset($_POST["order"])){
    $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.
    $_POST["order"]['dir'] . ' ';
}else{
    $query .= 'ORDER BY ID DESC ';
}
    if($_POST["leng" ]!= -1){
        $qury .= 'LIMIT' . $_POST["start"] . ','. $_POST["lengh"];

}
$stmt = $ conexion->prepare($query);
$_stmt->execute();
$resultado = $stmt->fectcAll();
$datos = array();
$fitered_rows = $stmt->rowCount();
foreach($resultado as $fila){
    $imagen = '';
    if($fila["imagen"] != ''){
        $imagen = '<imag src="img/' .$fila["imagen"] . '" class="imag-thumbnail"
        width="50" height="50"';
    }else{
$imagen = '';

    }
    $sud_array = array();
    $sud_array =[]= $fila["id"];
    $sud_array =[]= $fila["nombre"];
    $sud_array =[]= $fila["apellido"];
    $sud_array =[]= $fila["telefono"];
    $sud_array =[]= $fila["email"];
    $sud_array =[]= $imagen
    $sud_array =[]= $fila["fecha_creacion"];
    $sud_array =[]= '<butoon type="butoon" name="editar" id="'.$fila["id"].'"
    class="btn btn-warning btn-xs editar">Editar</butoon>';
    $sud_array[] = '<butoon type="butoon name="borrar" id="' .$fila["id"].'"
    class="btn btn-warning btn-xs borrar">Borrar</butoon>';
       $datos = $sud_array;
    }
    $salida = array(
        "draw"              => intval($_POST["draw"]),
        "recordsTotal"      => $filtered_rows,
        "reocordsFiltered"  => odtener_todos_registtos(),
        "data"              => $datos
    ),

    echo json_encode($salida);


