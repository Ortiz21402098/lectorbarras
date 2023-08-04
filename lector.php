<!-- conexion -->
<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "lectorqr";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>

<!-- html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector qr Labo PROA</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
        <h1>Scanner</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#retiro">Retiro</a></li>
            <li><a href="#devolucion">Devolucion</a></li>
        </ul>
    </nav>

    <div id="retiro">
        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <td>Nombre del docente</td>
                        <td>Curso</td>
                        <td>Codigo de barras</td>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td><input type="text" id="docente" name="docente"></td>
                        <td>
                            <select name="curso" id="curso">
                                <option value="1A">1A</option>
                                <option value="1B">1B</option>
                                <option value="2A">2A</option>
                                <option value="2B">2B</option>
                                <option value="3A">3A</option>
                                <option value="3B">3B</option>
                                <option value="4A">4A</option>
                                <option value="4B">4B</option>
                                <option value="5A">5A</option>
                                <option value="5B">5B</option>
                                <option value="6A">6A</option>
                                <option value="6B">6B</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                            </select>
                        </td>
                        <td>
                            <div>
                                <input type="text" id="compu" name="compu" autofocus>
                            </div>
                        </td>
                    </tr>
                </body>
            </table>
            <div class="mb-2">
                        <button type ="submit" name="enviar" class="col-12 btn btn-primary d-flex justify-content-between ">
                        <span>Enviar </span><i id="icono" class="bi bi-cursor-fill "></i>
                        </button>
            </div> 
        </form>
    </div>
    
    <div id="resultado">
        <!-- Aquí mostraremos el contenido del vector -->
    </div>
    <script src="java.js"></script>
    
    <div id="devolucion">
        <div class="mb-2">
                    <button id ="botton" name="eliminar" class="col-12 btn btn-primary d-flex justify-content-between ">
                    <span>Eliminar</span><i id="icono" class="bi bi-cursor-fill "></i>
                    </button>
        </div>     
    </div>
</body>
</html>

<!-- registro -->
<?php

  if(isset($_POST['enviar'])){
      
      $docente = $_POST['docente'];
      $curso = $_POST['curso'];
      $compu = $_POST['compu'];
      
      
      $insertar = "INSERT INTO datos Values ('$docente','$curso','$compu','$hora')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>

<!-- eliminar -->
<?php

  if(isset($_POST['eliminar'])){
      
      $docente = $_POST['docente'];
      $curso = $_POST['curso'];
      $compu = $_POST['compu'];
      $hora = $_POST['hora'];
      
      $eliminar = "DELETE FROM datos Values ('$docente','$curso','$compu','$hora')";
      
      $coneccion = mysqli_query($coneccion,$eliminar);
  }
?>