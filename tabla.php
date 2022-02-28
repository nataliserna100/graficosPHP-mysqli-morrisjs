<?php
$server= "localhost";
$usuario= "root";
$clave= "admin";
$bd= "jptdatabase";

$enlace = mysqli_connect($server,$usuario,$clave,$bd);

if(!$enlace){
    echo"Error en la conexion";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>TEST JPT</title>
  <link rel="stylesheet" href="morrisLibs/morris.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
  <script src="jqueryLibs/jquery-3.5.1.min.js"></script>
  <script src="raphaelLibs/raphael-min.js"></script>
  <script src="morrisLibs/morris.min.js"></script>
  
 </head>
 <body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">INDICE AMBIENTAL</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="graficos.php">Graficos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tabla.php">Tabla</a>
        </li>
      </ul>
       <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>
        

        <?php
if (isset($_POST['guardar'])) {
   $id =$_POST["id"];
   $temperatura =$_POST["temperatura"];
   $humedad =$_POST["humedad"];
   $nivel =$_POST["nivel"];
 
  
  

$insertarDatos="INSERT INTO indiceambiental VALUES('$id','$temperatura','$humedad','$nivel')";

$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
if (!$ejecutarInsertar) {
    echo "Error en sql";
}

}
?>
  <div class="container" style="margin-top:30px">
          
            <div class="row">
                <div class="col-sm-12">
                    <h2>Indice</h2>
                    <br>
                    <div data-eprole="list" data-endpoint="?c=programa&amp;a=actionList" data-cb="printDataSource">
                        <table class="table table-striped">
                            <thead class="bg-primary navbar-dark text-white">
                                <tr><th data-property="id">Id</th>
                                    <th data-property="temperatura">Temperatura</th>
                                      <th data-property="humedad">Humedad</th>
                                    <th data-property="nivel">Nivel</th>
                                  
                                </tr>

                            </thead>

                            <?php
                            $consulta ="SELECT * FROM indiceambiental"; 
                            $ejecutarConsulta = mysqli_query($enlace,$consulta);
                            $verFilas =mysqli_num_rows($ejecutarConsulta);
                            $fila =mysqli_fetch_array($ejecutarConsulta);

                            if(!$ejecutarConsulta){
                            echo"Error en la consulta";
                        }else{

                        if($verFilas<1){

                        echo"<tr><td>Sin registros</td></tr>";
                    } else{
                   for($i=0; $i<=$fila; $i++){
                   echo '<tr>
                         <td>'.$fila[0].'</td>
                       <td>'.$fila[1].'</td>
                        <td>'.$fila[2].'</td>
                       <td>'.$fila[3].'</td>
                      
                      
                      
                   </tr>';

   $fila =mysqli_fetch_array($ejecutarConsulta);
               }


                }
                    }

                            ?>

                           
  </table>
<!--
        

if (isset($_POST["id"])) {

    $id= $_POST["id"];
    $consulta="DELETE FROM usuario WHERE id=$id";

    $resultado = mysql_query($consulta,$conexion)or die(mysql_error());
header("location:listar.php");
}
                        ?>-->


                              <tfoot>
                                    
                                        <a href="#" class="btnEditar">editar</a>
                                        <a href="#" class="btnDetalle">detalle</a>
                                        <a href="#" class="btnEliminar">eliminar</a>
                                    </td>
                                </tfoot>
                      
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                    <a href="graficos.php" class="btn btn-info">Nuevo registro</a>
                </div>
            </div>            
            <br>
            <br>
        </div>
</body>
</html>