<?php
class Utilities {
	
	/*public static function formatDate($date, $format = 'Y-m-d H:i:s') {
		return DateTime::createFromFormat($format, $date)->format('M. j, Y');

	}

	public static function cuentaNinos($carrera){


		$sql = "SELECT count(tipo.usuario) as cuenta from registros where tipo_usuario=3 and carrera=$carrera"
		$num = Yii::app()->db->createCommand($sql_lid)->queryRow();	
		$cuentaNinos = $num['cuenta'];

		return $cuentaNinos;



	}

	public static function verificaInscrito($empleado){


	}*/

	public static function edad($fecha){
    $fecha = str_replace("/","-",$fecha);
    $fecha = date('Y/m/d',strtotime($fecha));
    $hoy = date('Y/m/d');
    $edad = $hoy - $fecha;
    return $edad;
	}

	public static function ultimoFolioEmp($carrera){


	$sql_lid = "SELECT 
	  max(registros.dorsal) as dorsal 
	FROM 
	  registros 
	WHERE 
	  carrera=$carrera and tipo_usuario<>3";

		
		$lid = Yii::app()->db->createCommand($sql_lid)->queryRow();		
					
		if( $lid['dorsal'] !=0 ){
			return $lid['dorsal']+1; 
		}else{
			return 0+1; 
		}

	}

	public static function verificaEmp($carrera,$id_empleado){


	$sql_lid = "SELECT 
	  count(registros.id) as reg 
	FROM 
	  registros 
	WHERE 
	  carrera=$carrera and id_empleado=$id_empleado and tipo_usuario=1";

		
		$lid = Yii::app()->db->createCommand($sql_lid)->queryRow();		
					
		return $lid['reg']; 
	}

	public static function formatDorsal($num){
		$numf = printf("%03d",$num);
		return $numf; 
	}

	public static function formatDorsalN($num){
		$numf = "N" . printf("%03d",$num);
		return $numf; 
	}




}
