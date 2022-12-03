<?php
include 'conexion.php';
class ModeloVacas
{
//funcion para obtener el listado de proyectos
static function selectVacas($tabla) 
{
$sql="select * from $tabla;";
$rs= Conexion::conectar()->query($sql);
return $rs;
$rs->close();
}

static function selectVacasT($tabla) 
{
$sql="select COUNT(*) FROM $tabla;";
$rs= Conexion::conectar()->query($sql);
return $rs;
$rs->close();
}

static function selectVacasM($tabla) 
{
  $sql="select * FROM $tabla;";
  $rs= Conexion::conectar()->query($sql);
  return $rs;
  $rs->close();
  }
  static function selectVacasS($tabla) 
{
  $sql="select * FROM $tabla;";
  $rs= Conexion::conectar()->query($sql);
  return $rs;
  $rs->close();
  }

  static function selectVacasMInfo($tabla) 
  {
    $sql="select * FROM $tabla;";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
    $rs->close();
    }
    static function selectVacasSInfo($tabla) 
    {
      $sql="select * FROM $tabla;";
      $rs= Conexion::conectar()->query($sql);
      return $rs;
      $rs->close();
      }

      static function insertBovino ($tabla,$datos) {
    $sql="insert into $tabla(numArete,fkTipo,peso) values ('$datos[numArete]','$datos[fkTipo]','$datos[peso]');";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
  }

  static function insertVacuna ($tabla,$datos) {
    $sql="insert into $tabla(fknumArete,fecha,fkidVacuna) values ('$datos[fknumArete]','$datos[fecha]','$datos[fkidVacuna]');";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
  }
  static function insertInformacion ($tabla,$datos) {
    $sql="insert into $tabla(fknumArete,partos,numEnc,tipoEnc,cph1,cph2,cph3,cph4,cc1,cc2,cc3,cc4,fecha) 
    values ('$datos[fknumArete]','$datos[partos]','$datos[numEnc]','$datos[tipoEnc]','$datos[cph1]',
    '$datos[cph2]','$datos[cph3]','$datos[cph4]','$datos[cc1]','$datos[cc2]','$datos[cc3]','$datos[cc3]','$datos[fecha]');";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
  }



  static function insertPruebas ($tabla,$datos) {
    $sql="insert into $tabla(id,NumArete,fecha,ph1,ph2,ph3,ph4,cond1,cond2,cond3,cond4) 
    values (null,'$datos[NumArete]','$datos[fecha]','$datos[ph1]',
    '$datos[ph2]','$datos[ph3]','$datos[ph4]',
    '$datos[cond1]','$datos[cond2]','$datos[cond3]','$datos[cond4]');";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
  }
  static function updateProyecto($tabla,$datos) {
    $sql="UPDATE $tabla SET fktipo='$datos[fktipo]',
    peso='$datos[peso]'
    where numArete='$datos[id]';";
    $rs=conexion::conectar()->query($sql);
    return $rs;
  }
  static function deleteVacas($tabla,$id){
    $sql="DELETE FROM $tabla WHERE numArete='$id';";
    $rs=conexion::conectar()->query($sql);
    return $rs;
  }
  static function selectVacasId($tabla,$id) {
    $sql="SELECT * FROM $tabla WHERE numVacas='$id';";
    $rs= Conexion::conectar()->query($sql);
    return $rs;
    $rs->close();
  }
  //Funcion para consultar los tipos de bovinos
  static function getTipos($tabla) {
    $sql="SELECT * FROM $tabla;";
    $rs=conexion::conectar()->query($sql);
    return $rs;
   }
    //Funcion para consultar los tipos de vacuna
    static function getVacuna($tabla) {
    $sql="SELECT * FROM $tabla;";
    $rs=conexion::conectar()->query($sql);
    return $rs;
   }


   //FUNCION PARA CONSULTAR PROMEDIOS DE PH
   static function getPH($tabla){
    $sql="SELECT numArete, promedioPH, promedioCC FROM $tabla;";
    $rs = conexion::conectar()->query($sql);
    return $rs;
   }

}
?>