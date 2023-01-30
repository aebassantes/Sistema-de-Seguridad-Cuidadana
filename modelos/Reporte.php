<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Reporte
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre,$apellido,$cedula,$ciudad,$direccion,$motivo,$explicacion,$informacion)
	{
		$sql="INSERT INTO reporte (nombre, apellido, cedula, ciudad, direccion, motivo, explicacion, informacion)
		VALUES ('$nombre','$apellido','$cedula','$ciudad','$direccion','$motivo','$explicacion','$informacion')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idreporte,$nombre,$apellido,$cedula,$ciudad,$direccion,$motivo,$explicacion,$informacion)
	{
		$sql="UPDATE reporte SET nombre='$nombre',apellido='$apellido',cedula='$cedula',ciudad='$ciudad',direccion='$direccion',motivo='$motivo',explicacion='$explicacion',informacion='$informacion' WHERE idreporte='$idreporte'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($idreporte)
	{
		$sql="UPDATE reporte SET condicion='0' WHERE idreporte='$idreporte'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idreporte)
	{
		$sql="UPDATE reporte SET condicion='1' WHERE idreporte='$idreporte'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idreporte)
	{
		$sql="SELECT * FROM reporte WHERE idreporte='$idreporte'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT idreporte,nombre,apellido,cedula,ciudad,direccion,motivo,explicacion,informacion,condicion FROM reporte a";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos
	public function listarActivos()
	{
		$sql="SELECT idreporte,nombre,apellido,cedula,ciudad,direccion,motivo,explicacion,informacion,condicion FROM reporte a WHERE condicion='1'";
		return ejecutarConsulta($sql);		
	}

}

?>