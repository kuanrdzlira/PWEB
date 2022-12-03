<?php
    class ControladorVacas{

        static function consultarVacas(){
        $tabla = 'infovaca';
        $vacas=ModeloVacas::selectVacas($tabla);
        $arreglo = $vacas -> fetch_all();
        return $arreglo;
        }

        static function consultarVacasT(){
            $tabla = 'infovaca';
            $vacas=ModeloVacas::selectVacasT($tabla);
            $arreglo = $vacas -> fetch_all();
            return $arreglo;
            }

            static function consultarVacasM(){
                $tabla = 'vacasmastitis';
                $vacas=ModeloVacas::selectVacasM($tabla);
                $arreglo = $vacas -> fetch_all();
                return $arreglo;
                }
                static function consultarVacasS(){
                    $tabla = 'totalvacass';
                    $vacas=ModeloVacas::selectVacasS($tabla);
                    $arreglo = $vacas -> fetch_all();
                    return $arreglo;
                    }
                    static function consultarVacasMInfo(){
                    $tabla = 'infoVacasMastitis';
                    $vacas=ModeloVacas::selectVacasMInfo($tabla);
                    $arreglo = $vacas -> fetch_all();
                    return $arreglo;
               }
               static function consultarVacasSInfo(){
                $tabla = 'vacasana';
                $vacas=ModeloVacas::selectVacasMInfo($tabla);
                $arreglo = $vacas -> fetch_all();
                return $arreglo;
                }




                static function guardarBovino() {
            if(isset($_POST["guardar"]))
            {
            $tabla='bovino';
            $datos=array("numArete"=>$_POST["NumArete"],
            "fkTipo"=>$_POST["tipoBovino"],
            "peso"=>$_POST["peso"]
        );
            $respuesta=ModeloVacas::insertBovino($tabla,$datos); 
            if($respuesta>0){
                echo '
                <script>
                alert("Bovino añadida correctamente");
                </script>
                ';
            }
            }
        }
        static function guardarVacuna() {
            if(isset($_POST["guardar"]))
            {
            $tabla='registro_vacuna';
            $datos=array("fknumArete"=>$_POST["NumArete"],
            "fecha"=>$_POST["fechaV"],
            "fkidVacuna"=>$_POST["tipoVacuna"]
        );
            $respuesta=ModeloVacas::insertVacuna($tabla,$datos); 
                      }
        }
        static function guardarInformacion() {
            if(isset($_POST["guardar"]))
            {
            $tabla='informacion';
            $datos=array("fknumArete"=>$_POST["NumArete"],
            "partos"=>$_POST["partos"],
            "numEnc"=>$_POST["nInseminacion"],
            "tipoEnc"=>$_POST["inseminacion"],
            "cph1"=>$_POST["cph1"],
            "cph2"=>$_POST["cph2"],
            "cph3"=>$_POST["cph3"],
            "cph4"=>$_POST["cph4"],
            "cc1"=>$_POST["cc1"],
            "cc2"=>$_POST["cc2"],
            "cc3"=>$_POST["cc3"],
            "cc4"=>$_POST["cc4"],
            "fecha"=>$_POST["fechaP"],
        );
            $respuesta=ModeloVacas::insertInformacion($tabla,$datos); 
                      }
        }





        static function guardarPruebas() {
            if(isset($_POST["guardar"]))
            {
            $tabla='pruebas';
            $datos=array(
            "NumArete"=>$_POST["NumArete"],
            "fecha"=>$_POST["fecha"],
            "ph1"=>$_POST["ph1"],
            "ph2"=>$_POST["ph2"],
            "ph3"=>$_POST["ph3"],
            "ph4"=>$_POST["ph4"],
            "cond1"=>$_POST["cond1"],
            "cond2"=>$_POST["cond2"],
            "cond3"=>$_POST["cond3"],
            "cond4"=>$_POST["cond4"]
        );
            $respuesta=ModeloVacas::insertPruebas($tabla,$datos); 
            if($respuesta>0){
                echo '
                <script>
                alert("Prueba añadida correctamente");
                </script>
                ';
            }
            }
        }

        static function editarVacas(){
    if(isset($_POST["editar"])) {
        $tabla='bovino';
        $datos=array(
            "numArete"=>$_POST["NumArete"],
            "fkTipo"=>$_POST["tipoBovino"],
            "peso"=>$_POST["peso"]);
$respuesta=ModeloVacas::updateVacas($tabla,$datos);
if($respuesta>0){


}
    }
}

static function borrarVacas() {
    if (isset($_GET["accion"]) && $_GET["accion"]=="eliminar"){
        $tabla='bovino';
        $id=$_GET["id"];
        $respuesta=ModeloVacas::deleteVacas($tabla,$id);
        if($respuesta>0) {
             echo '
        <script>
        alert("Proyecto eliminado correctamente");
        </script>
 
        ';
        }
    }
}
static function consultaVacasId() {
    if(isset($_GET["numArete"])) {
        $tabla='bovino';
        $id=$_GET["numArete"];
        $respuesta=ModeloVacas::selectVacasId($tabla,$id);
        $proyecto=$respuesta->fetch_all();
        return $proyecto;
    }
}

/*Metodo para obtener los tipos de bovinos */
static function getTipoBovinos() {
    $tabla='tipobovino';
    $res=ModeloVacas::getTipos($tabla);
    //return $res;
    $tipos=$res->fetch_all();
    return $tipos;
}
/*Metodo para obtener los tipos de vacuna*/
static function getTipoVacunas() {
    $tabla='vacuna';
    $res=ModeloVacas::getVacuna($tabla);
    //return $res;
    $tipos=$res->fetch_all();
    return $tipos;
}

        //obtener promedios de PH para graficas
        static function getPhAvg(){
            $tabla = "infovaca";
            $res = ModeloVacas::getPH($tabla);
            return $res;
        }
    }
?>