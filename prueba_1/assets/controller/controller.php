<?php
require_once "$_SERVER[DOCUMENT_ROOT]/prueba_otp/prueba_1/assets/model/class.php";
$obj = new general();

if(!empty($_POST['type'])){
    if($_POST['type'] == 'guardar'){
        $check = $obj->registrar($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['correo'], $_POST['lenguajes']);
        if($check){
            die(json_encode(array('status' => 1, 'total_registros' => 1, 'data' => true)));
        }else{
            die(json_encode(array('status' => 0, 'total_registros' => 0, 'data' => false)));
        }
    }

    if($_POST['type'] == 'buscar_cedula'){
        $check = $obj->buscar_cedula((int)$_POST['valor']);
        if($check){
            die(json_encode(array('status' => 1, 'total_registros' => count($check), 'data' => json_encode($check))));
        }else{
            die(json_encode(array('status' => 0, 'total_registros' => 0, 'data' => false)));
        }
    }
}
?>