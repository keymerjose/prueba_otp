<?php
require_once "$_SERVER[DOCUMENT_ROOT]/prueba_otp/prueba_1/assets/config/config.php";

class general{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_port;
    private $conex;

    public function __construct(){
        # Datos de conexión
        $this->db_host      = db_host;
        $this->db_name      = db_name;
        $this->db_user      = db_user;
        $this->db_password  = db_password;
        $this->db_port      = db_port;

        $this->conex = new PDO('mysql:host='.$this->db_host.';port='.$this->db_port.';dbname='.$this->db_name, $this->db_user, $this->db_password);
        $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function registrar(string $nombre, string $apellido, int $cedula, string $correo, string $lenguajes){
        $sql = "INSERT INTO programador (nombre, apellido, cedula, correo, lenguajes) VALUES (:nombre, :apellido, :cedula, :correo, :lenguajes)";
        $arrayParam = array(':nombre' => $nombre, ':apellido' => $apellido, ':cedula' => $cedula, ':correo' => $correo, ':lenguajes' => $lenguajes);
        $query = $this->conex->prepare($sql);
        return $query->execute($arrayParam);
    }

    public function buscar_cedula(?int $cedula){
        $sql = "SELECT * FROM programador WHERE 1";

        if(!empty($cedula)){
            $sql .= " AND cedula = :cedula";
        }

        $query = $this->conex->prepare($sql);
        if(!empty($cedula)){
            $arrayParam = array(':cedula' => $cedula);
            $query->execute($arrayParam);
        }else{
            $query->execute();
        }
        if($query->rowCount() > 0){
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $Array[] = array_map('utf8_encode', $row);
            }

            return $Array;
        }else{
            return false;
        }

    }
}

?>