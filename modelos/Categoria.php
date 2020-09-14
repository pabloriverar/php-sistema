<?php
//conexion a base de datos
require '../config/conexion.php'

Class categoria
{
  //definicion de constructor
  public function_construct(){

  }

  //Implementando metodo para insertar registros
public function insertar ($nombre,$descripcion)
{
  $sql="INSERT INTO categoria(nombre,descripcion,descripcion)
  VALUES ('$nombre','$descripcion','1')";
  return ejecutarConsulta($sql);
}

  //Implementando metodo para editar los registros
  public function editar ($idcategoria,$nombre,$descripcion)
  {
      $sql="UPDATE categoria SET nombre='$nombre',descripcion='$descripcion'
      WHERE idcategoria='$idcategoria'";
      return ejecutarConsulta($sql);
  }

    //Implementando metodo para desactivar categorias
    public function desactivar ($idcategoria)
    {
      $sql="UPDATE categoria SET condicion='0'
      WHERE idcategoria='$idcategoria'";
      return ejecutarConsulta($sql);
    }

    //Implementando metodo para activar categorias
    public function activar ($idcategoria)
    {
      $sql="UPDATE categoria SET condicion='1'
      WHERE idcategoria='$idcategoria'";
      return ejecutarConsulta($sql);
    }

    //Implementando  metodo para mostrar los metodos
    public function mostrar ($idcategoria)
    {
      $sql"SELECT * FROM categoria
      WHERE idcategoria='$idcategoria'";
      return ejecutarConsultaSimpleFila($sql);
    }

    //Implementar metodo para listar elementos
    public function listar()
    {
      $sql="SELECT * FROM categoria";
      return ejecutarConsulta($sql);
    }
}

 ?>
