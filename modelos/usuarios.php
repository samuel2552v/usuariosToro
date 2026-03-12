<?php
include_once("connection.php");

class Usuarios{
    /* atributos */
    private $idusuario;
    private $nombres;
    private $apellidos;
    private $cedula;
    private $usuario;
    private $password;

    private $con;

    /* metodos */
    public function __construct(){
        $this->con = new Conexion();
    } // Fin del constructor

    public function listar(){
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function crear(){
        $sql2="SELECT * FROM usuarios WHERE cedula='$this->cedula'";
        echo "sql";
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);
        if ($filas==0){
            $sql="INSERT INTO usuarios (nombres, apellidos, cedula, usuario, password) VALUES('$this->nombres',
            '$this->apellidos', '$this->cedula', '$this->usuario', '$this->password')";
            $this->con->consultaSimple("$sql");
            return true;
        }
        else
        {
                return false;
        }
    }


}// Fin de la clase usuarios

$miUsuario = new Usuarios();
$miUsuario->listar();
?>