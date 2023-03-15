<?php 
	include_once('db.php');

	class PropietarioModelo extends Conexion{
    public function registrarPropietarioModelo($datosPropietario){
      $sql = "INSERT INTO tbl_propietarios VALUES(null,:num_cedula,:primer_nombre,:segundo_nombre,:apellidos,:direccion,:telefono,:ciudad)";
      try {
        // <!-- numero de cedula, primer nombre, segundo nombre, apellidos, direccion , telefono y ciudad -->
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':num_cedula', $datosPropietario['num_cedula'],PDO::PARAM_INT);
        $stmt->bindParam(':primer_nombre', $datosPropietario['primer_nombre'],PDO::PARAM_STR);
        $stmt->bindParam(':segundo_nombre', $datosPropietario['segundo_nombre'],PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $datosPropietario['apellidos'],PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datosPropietario['direccion'],PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datosPropietario['telefono'],PDO::PARAM_INT);
        $stmt->bindParam(':ciudad', $datosPropietario['ciudad'],PDO::PARAM_STR);
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

		public function tablaPropietariosModelo(){
      $sql = "SELECT * FROM tbl_propietarios";
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