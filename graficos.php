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


<script>

function multiplicar() {
m1 = document.getElementById("multiplicando").value;
m2 = document.getElementById("multiplicador").value;
t = m1*m2;
document.getElementById("temperatura").value = t;
 
m1 = document.getElementById("multiplicando2").value;
m2 = document.getElementById("multiplicador2").value;
h = m1*m2;
document.getElementById("humedad").value = h;
 
m1 = document.getElementById("multiplicando3").value;
m2 = document.getElementById("multiplicador3").value;
n= m1*m2;
document.getElementById("nivel").value = n;
 
 
}

</script>
 
</head>
 
<body>
 
<div class="container" style="margin-top:30px">
            <!-- contenido principal -->

            <form id="formulario" action="tabla.php" name="formulario" method="POST">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <h2>INDICE AMBIENTAL</h2>
                        </div>
                    </div>
                </div>
           
                   <div class="row">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input  type="number"  class="form-control" id="id" name="id">
                    </div>
             
                </div>

                
                    <div class="form-group">
                        <label for=""></label>
                      <input type="number" name="cant" id="multiplicando" value=0 onchange="multiplicar();" size="4" />
                    
                
               
                   
                        <label for="">(%):</label>
                       <td><input type="text" name="vunit" id="multiplicador" onchange="multiplicar();" value=0.5 size="16" /></td>
                 
                
                    
                        <label for="temperatura">Temp:</label>
                      <input type="text" name="temperatura" id="temperatura"  value=0 size="20" />
                    </div>
                


                    <div class="form-group">
                        <label for=""></label>
                       <input type="number" name="cant2" id="multiplicando2" value=0 onchange="multiplicar();" size="4" />
                    
                        <label for="">(%):</label>
                       <input type="text" name="vunit2" id="multiplicador2" onchange="multiplicar();" value=0.15 size="16" />
                    
                   
                    
                        <label for="humedad">Hum:</label>
                        <input type="text" name="humedad" id="humedad"  value=0 size="20"/>
                    
                </div>
              
               
                    <div class="form-group">
                        <label for=""></label>
                        <input type="number" name="cant3" id="multiplicando3" value=0 onchange="multiplicar();" size="4" />
                   
                        <label for="">(%):</label>
                        <input type="text" name="vunit3" id="multiplicador3" onchange="multiplicar();" value=0.2 size="16" />
                    <label for="nivel">Nivel:</label>
                      <input type="text" name="nivel" id="nivel"  value=0 size="20" />
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success" name="guardar" value="guardar">Guardar</button>
                        <button type="reset" class="btn btn-danger">Limpiar</button>
                        <a href="graficos.php" class="btn btn-info">Nuevo registro</a>
                        <a href="tabla.php" class="btn btn-warning">Ver todos los registros</a>
                    </div>
                    <hr class="d-sm-none">
                </div></form>            
            <br>
            <br>
        </div>
        

 
</body>
</html>