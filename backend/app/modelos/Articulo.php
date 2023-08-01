<?php 

class Articulo{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerArticulos(){
        $this->db->query("SELECT * FROM usuarios");

        return $this->db->registros();
    }
    public function ObteneRusuario($correo, $contraseña){
        $this->db->query("SELECT * FROM usuarios Where correo='$correo' and contraseña='$contraseña'");
        return $row = $this->db->registro();
    }
}