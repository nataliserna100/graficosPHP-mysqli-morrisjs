
<?php
require_once "conexion.php";
$connect= conexion();
$query = "SELECT * FROM indiceambiental";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ id:'".$row["id"]."', temperatura:".$row["temperatura"].", humedad:".$row["humedad"].", nivel:".$row["nivel"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST JPT</title>
</head>
<body>

<div id="gráfica_de_barras">
</div>

<script>
    
Morris.Bar({
 element : 'gráfica_de_barras',
 data:[<?php echo $chart_data; ?>],
 xkey:'id',
 ykeys:['temperatura', 'humedad', 'nivel'],
 labels:['Temperatura', 'Humedad', 'Nivel'],
 hideHover:'auto',
 stacked:true
});

</script>
</body>
</html>