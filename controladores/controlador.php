<?php
include_once("modelos/usuarios.php");
class ControladorUsuarios{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuarios();
    }

    public function listar()
    {
        $listar = $this->usuario->listar();
        return $listar;
    }

    public function crear($cedula, $nombres, $apellidos, $usuario, $clave){
        $this->usuario->set("cedula",$cedula);
        $this->usuario->set("nombres",$nombres);
        $this->usuario->set("apellidos",$apellidos);
        $this->usuario->set("usuario",$usuario);
        $this->usuario->set("password",$clave);

        $resultado=$this->usuario->crear();
        return $resultado;
    }

}

?>