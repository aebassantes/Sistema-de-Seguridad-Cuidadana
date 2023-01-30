<?php 
require_once "../modelos/Reporte.php";

$reporte=new Reporte();

$idreporte=isset($_POST["idreporte"])? limpiarCadena($_POST["idreporte"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
$cedula=isset($_POST["cedula"])? limpiarCadena($_POST["cedula"]):"";
$ciudad=isset($_POST["ciudad"])? limpiarCadena($_POST["ciudad"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$motivo=isset($_POST["motivo"])? limpiarCadena($_POST["motivo"]):"";
$explicacion=isset($_POST["explicacion"])? limpiarCadena($_POST["explicacion"]):"";
$informacion=isset($_POST["informacion"])? limpiarCadena($_POST["informacion"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idreporte)){
			$rspta=$reporte->insertar($nombre,$apellido,$cedula,$ciudad,$direccion,$motivo,$explicacion,$informacion);
			echo $rspta ? "Reporte registrada con exito" : "La Reporte no se pudo registrar";
		}
		else {
			$rspta=$reporte->editar($idreporte,$nombre,$apellido,$cedula,$ciudad,$direccion,$motivo,$explicacion,$informacion);
			echo $rspta ? "Reporte actualizado" : " La Reporte no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$reporte->desactivar($idreporte);
 		echo $rspta ? "Reporte Desactivada" : " La Reporte no se puede desactivar";
	break;

	case 'activar':
		$rspta=$reporte->activar($idreporte);
 		echo $rspta ? "Reporte activada" : "La Reporte no se puede activar";
	break;

	case 'mostrar':
		$rspta=$reporte->mostrar($idreporte);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$reporte->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idreporte.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idreporte.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idreporte.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idreporte.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->apellido,
 				"3"=>$reg->cedula,
 				"4"=>$reg->ciudad,
 				"5"=>$reg->direccion,
 				"6"=>$reg->motivo,
 				"7"=>($reg->condicion)?'<span class="label bg-green">Reporte Activo</span>':
 				'<span class="label bg-red">Reporte en Revision</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

}
?>