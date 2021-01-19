<?php
require_once "$_SERVER[DOCUMENT_ROOT]/prueba_otp/prueba_1/assets/model/class.php";
$obj = new general();
if(!empty($_REQUEST['type'])){
    if($_REQUEST['type'] == 'buscar'){
        $check = $obj->buscar_cedula(NULL);
        if($check){
            die(json_encode(array('status' => 1, 'total_registros' => count($check), 'data' => json_encode($check))));
        }else{
            die(json_encode(array('status' => 0, 'total_registros' => 0, 'data' => false)));
        }
    }
}

?>