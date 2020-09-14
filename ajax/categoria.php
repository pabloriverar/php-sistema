<?php
require_once "../modelos/Categoria.php";

$categoria= new Categoria();

$idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"])):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"])):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"])):"";

switch ($_GET["op"]) {
     case 'guardaryeditar':
     if (empty($idcategoria)) {
      $response=$categoria->insertar($nombre,$descripcion);
      echo $response ? "Categoria registrada" : "Categoria no se puede registrar";
     }
     else {
       $response=$categoria->editar($idcategoria,$nombre,$descripcion);
       echo $response ? "Categoria actualizada" : "Categoria no se puedo actualizar";
     }
      break;

     case 'desactivar':
     $response=$categoria->desactivar($idcategoria);
     echo $response ? "Categoria desactivada" : "Categoria no se puede desactivar";
      break;

     case 'activar':
     $response=$categoria->activar($idcategoria);
     echo $response ? "Categoria activada" : "Categoria no se puede activar";
      break;

     case 'mostrar':
     $response=$categoria->mostrar($idcategoria);
     //codificando el resultado a JSON
     echo json_encode($response);
      break;

     case 'listar':
           $response=$categoria->listar();
           //Declarando array
           $data= Array();

           while ($reg=$response->fetch_object()) {
             data[]=array(
               "0"=>$reg->idcategoria,
                "1"=>$reg->nombre,
             );
           }
       break;


  default:
    // code...
    break;
}

 ?>
