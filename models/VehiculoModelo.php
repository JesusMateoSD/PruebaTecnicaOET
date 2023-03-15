<?php 
	include_once('db.php');

	class VehiculoModelo extends Conexion{
		public function registrarVehiculoModelo($datosVehiculo){
	    $sql = "INSERT INTO tbl_vehiculos VALUES(null,:placa,:color,:marca,:tipo_vehiculo,:conductor,:propietario)";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':placa', $datosVehiculo['placa'],PDO::PARAM_STR);
	      $stmt->bindParam(':color', $datosVehiculo['color'],PDO::PARAM_STR);
	      $stmt->bindParam(':marca', $datosVehiculo['marca'],PDO::PARAM_STR);
	      $stmt->bindParam(':tipo_vehiculo', $datosVehiculo['tipo_vehiculo'],PDO::PARAM_STR);
	      $stmt->bindParam(':conductor', $datosVehiculo['conductor'],PDO::PARAM_INT);
	      $stmt->bindParam(':propietario', $datosVehiculo['propietario'],PDO::PARAM_INT);
	      if($stmt->execute()){
	        return 'success';
	      }
	      else{
	        return 'error';
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function tablaVehiculosModelo(){
	    $sql = "SELECT placa, color, marca, tipo_vehiculo, CONCAT(tbl_conductores.primer_nombre,' ', tbl_conductores.segundo_nombre,' ', tbl_conductores.apellidos) AS conductores, CONCAT(tbl_propietarios.primer_nombre,' ', tbl_propietarios.segundo_nombre,' ', tbl_propietarios.apellidos) AS propietarios FROM tbl_vehiculos INNER JOIN tbl_conductores ON tbl_vehiculos.id_conductor_vehiculo = tbl_conductores.id_usuario INNER JOIN tbl_propietarios ON tbl_vehiculos.id_propietario_vehiculo = tbl_propietarios.id_usuario";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      if($stmt->execute()){
	        return $stmt->fetchAll();
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }
	}
?>