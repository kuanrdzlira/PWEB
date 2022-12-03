<?php
class controladorVistas {
   static function controlarVistas(){
      if(isset($_GET["seccion"])){
         $seccion = "vista/".$_GET["seccion"].".php";
         include $seccion;
      }
   }
}
?>