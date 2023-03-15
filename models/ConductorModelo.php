<?php 

include_once('db.php');

class ConductorModelo extends Conexion{
  public function registrarConductorModelo($datosConductor){
    $sql = "INSERT INTO tbl_conductores VALUES(null,:num_cedula,:primer_nombre,:segundo_nombre,:apellidos,:direccion,:telefono,:ciudad)";
    try {
      // <!-- numero de cedula, primer nombre, segundo nombre, apellidos, direccion , telefono y ciudad -->
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':num_cedula', $datosConductor['num_cedula'],PDO::PARAM_INT);
      $stmt->bindParam(':primer_nombre', $datosConductor['primer_nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':segundo_nombre', $datosConductor['segundo_nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':apellidos', $datosConductor['apellidos'],PDO::PARAM_STR);
      $stmt->bindParam(':direccion', $datosConductor['direccion'],PDO::PARAM_STR);
      $stmt->bindParam(':telefono', $datosConductor['telefono'],PDO::PARAM_INT);
      $stmt->bindParam(':ciudad', $datosConductor['ciudad'],PDO::PARAM_STR);
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

  public function tablaConductoresModelo(){
    $sql = "SELECT * FROM tbl_conductores";
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

  public function tablaUsuariosAdmModelo(){
    $sql = "SELECT * FROM tbl_usuarios WHERE nivel = :nivel";
    try {
      $nivel = 1;
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nivel', $nivel,PDO::PARAM_STR);
      if($stmt->execute()){
        return $stmt->fetchAll();
      }
    } catch (Exception $e) {
      return $e;
    }
  }
}
?>