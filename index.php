<!DOCTYPE html>
<html>
 <head>
  <title>TEST JPT</title>
  <link rel="stylesheet" href="morrisLibs/morris.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="index.php">Graficos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="graficos.php">Indice</a>
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
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Grafico Indice Ambiental</h2>
   <h3 align="center">Datos</h3>   
   <br /><br />
   <div id="carga_grafica_Bar"></div>
  </div>
 </body>
</html>
<script>
        $(document).ready(function(){
        $('#carga_grafica_Bar').load('graphbar.php');
        //$('#loadarea').load('area.php');
    });
</script>