<?php

class Login extends Controlador{
    public function __construct(){
        $this->articuloModelo = $this->modelo('Articulo');
        //echo 'Controlador paginas cargado';
    }
    public function index(){

        $articulos = $this->articuloModelo->obtenerArticulos();

        $datos = [
            'titulo' => 'Bienvenido a MVC render2web',
            'articulos' => $articulos
        ];

        $this->vista('paginas/inicio', $datos);
    }

    public function ValidarUsuario(){
                
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $_SESSION['correo']=$correo;

        $conexion = mysqli_connect("localhost","root","","Sean_Innovation");

        $consulta="SELECT * FROM usuarios Where correo='$correo' and contraseña='$contraseña'";
        $resultado=mysqli_query($conexion,$consulta);
        $result = $this->articuloModelo->ObteneRusuario($correo, $contraseña);
        $datos = [
            'usuario' => $result->usuario,
            'nombre_completo' => $result->nombre_completo
        ];
        $filas = mysqli_num_rows($resultado);

        if ($filas) {
            $this->vista('paginas/index',$datos);
        }else {
            echo '
            <script>
                alert("!Has Ingresado Incorrectamente¡...");
                alert("!Por Favor... Intentelo De Nuevo"); 
                window.location = "../inicio.php";
            </script>
        ';
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }

    public function actualizar($num_registro){
        echo $num_registro;
    }

    Public function Registrar(){
        $nombre_completo = $_POST['name'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];

        //$contraseña = hash('sha512', $contraseña);
        $conexion = mysqli_connect("localhost","root","","Sean_Innovation");
        $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, telefono, contraseña) Values ('$nombre_completo', '$correo', '$usuario', '$telefono', '$contraseña')";

        //Verificar que el correo no se repita en a basede datos

        $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

        if (mysqli_num_rows($verificar_correo) > 0) {
            echo '
                <script>
                    alert("!Este Correo Ya Esta En Uso¡...");
                    alert("!Por Favor... Intentelo Con Otro Diferente¡"); 
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }

        //Verificar que el nombre de usuario no se repita en a base de datos

        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

        if (mysqli_num_rows($verificar_usuario) > 0) {
            echo '
                <script>
                    alert("!El usuario Ya Esta En Uso¡...");
                    alert("!Por Favor... Intentelo Con Otro Diferente¡"); 
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo '
                <script>
                    alert("Usuario Registrado Correctamente");
                    window.location = "../index.php";
                </script>
            ';   
        }
        mysqli_close($conexion);
    }   
}