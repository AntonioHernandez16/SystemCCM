<style>
 <style>
  * {
    box-sizing: border-box;
  }
  
  body {
    margin: 0px;
    font-family: 'segoe ui';
  }
  
  .nav {
    height: 50px;
    width: 100%;
    background-color: #1f53c5;;
    position: relative;
  }
  
  .nav > .nav-header {
    display: inline;
  }
  
  .nav > .nav-header > .nav-title {
    display: inline-block;
    font-size: 22px;
    color: #fff;
    font-weight: 550;
    font-family: Arial, Helvetica, sans-serif;
    padding: 10px 10px 10px 10px;
  }
  
  .nav > .nav-btn {
    display: none;
  }
  
  .nav > .nav-links {
    display: inline;
    float: right;
    font-size: 18px;
  }
  .nav > .nav-links > ul li a{
    display: block;
    padding: 0 8px;
    color: #fff;
    line-height: 40px;
    font-size: 18px;
    text-decoration: none;

  }
  .nav > .nav-links > ul{
    padding: 0;
    margin-top: 5px;
    list-style: none;
    position: relative;
    
  }
  .nav > .nav-links > ul li{
    display: inline-block;
    background-color: #1f53c5;;
    
    
  }
  .nav > .nav-links > ul li:hover{
      background-color: #0b65af;
      border-radius: 5px;
  }
  
  .nav > #nav-check {
    display: none;
  }

 .nav .nav-links ul a.icon{
 margin-left: 80px;
 margin-right: 10px;
 }

 .nav .nav-links ul a i{
    background-color: #fff;
    border-radius: 50px;
    padding: 7px;
    margin-left: 5px;
 }

  
  @media (max-width:700px) {
    .nav > .nav-btn {
      display: inline-block;
      position: absolute;
      right: 0px;
      top: 0px;
    }
    .nav > .nav-btn > label {
      display: inline-block;
      width: 50px;
      height: 50px;
      padding: 13px;
    }
    .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
      background-color: rgba(0, 0, 0, 0.3);
    }
    .nav > .nav-btn > label > span {
      display: block;
      width: 25px;
      height: 10px;
      border-top: 2px solid #eee;
    }
    .nav > .nav-links {
      position: absolute;
      display: block;
      width: 100%;
      background-color: #333;
      height: 0px;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 50px;
      left: 0px;
    }
    .nav > .nav-links > ul li a {
      display: block;
      width: 100%;
    }

    /*   */


    
      .nav > .nav-links > ul li{
        display: block;
        margin-bottom: 20px;
        padding: 0;
        background-color: #333;
         
      }
      .nav > .nav-links > ul li a{
          margin-left: 40%;
      }
      .nav .nav-links ul a.icon{
        margin-left: 33%;
      }

    /*   */
    .nav > #nav-check:not(:checked) ~ .nav-links {
      height: 0px;
    }
    .nav > #nav-check:checked ~ .nav-links {
      height: calc(100vh - 50px);
      overflow-y: auto;
    }
  }

  * {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
background-image: url('fondo.jpg');
}

.form-register {
width: 800px;
background: #24303c;
padding: 30px;
margin: auto;
margin-top: 2%;
border-radius: 4px;
font-family: 'calibri';
color: white;
box-shadow: 7px 13px 37px #000;
}

.form-register h4 {
font-size: 22px;
margin-bottom: 20px;
}

.controls {
width: 100%;
background: #24303c;
padding: 10px;
border-radius: 4px;
margin-bottom: 16px;
border: 1px solid #1f53c5;
font-family: 'calibri';
font-size: 18px;
color: white;
text-align: center;
}


.form-register p {
height: 40px;
text-align: center;
font-size: 18px;
line-height: 40px;
}

.form-register label{
height: 40px;
text-align: center;
font-size: 18px;
line-height: 40px;
}

.form-register select{
height: 40px;
text-align: center;
font-size: 18px;
line-height: 40px;
color: #000;
}

.form-register a {
color: white;
text-decoration: none;
}

.form-register a:hover {
color: white;
text-decoration: underline;
}

.form-register .botons {
width: 100%;
background: #1f53c5;
border: none;
padding: 12px;
color: white;
margin: 16px 0;
font-size: 16px;
}

@media screen and (max-width: 700px) {
.radio-inline, .col-25, .form-register, .p, .botons, input[type=submit] {
  width: 100%;
  margin-top: 2%;
}
}

.radio-inline {
padding: 1.5%;
}
</style>

</style>


<!DOCTYPE HTML>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Gráficas</title>
</head>
<body>
    <div class="nav">
          <input type="checkbox" id="nav-check">
          <div class="nav-header">
            <div class="nav-title">
              CCM
            </div>
          </div>
          <div class="nav-btn">
            <label for="nav-check">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>
          
          <div class="nav-links">
              <ul>
                <li><a href="Graficas.php">Regresar</a></li>

            <a class="icon">
              <i class="fa fa-twitter"></i>
              <i class="fa fa-linkedin"></i>
              <i class="fa fa-youtube"></i>
  
            </a>
              </ul>
          </div>
    </div>
    <form class="form-register">
        <p>Tu Gráfica: </p>
        <div class="controls">
         <canvas id="bar-chart"></canvas>
        </div>
        <a id="download"
            download="ChartImage.jpg" 
            href=""
            class="btn btn-primary float-right bg-flat-color-1"
            title="Descargar Gráfico">

        <!-- Download Icon -->
            <i class="fa fa-download"></i>
        </a>
    </form>
</body>
<?php
    $red = $_POST["red"]; 
    if(isset($_POST["Filtro"])){
        $filter = $_POST["Filtro"]; 
    }

    session_start(); 
    include("conexionDB.php"); 
	
	$usuario=$_SESSION["usuario"]; 
	$redPermitida = $_SESSION["red"]; 
	if($usuario == "" || $redPermitida == ""){
    	echo "<script>window.location.href='index.php'; </script>";
	}

    
	echo "<script>console.log('ojo al tejoo " . $filter . "' );</script>";
    if($redPermitida != $red and $redPermitida != 0){
         
		echo '<script>alert (" La cuenta sólo tiene permisos para crear gráficas de la red:  '. $redPermitida .' .");</script>';
		echo "<script>console.log('No se pudo " . $red . "' );</script>";
		$conexion -> close(); 
		echo "<script>window.location.href='Graficas.php'; </script>";
    }
    else{
        if($filter == "Month"){
			
            $mes = $_POST["mes"]; 
            $year = date('Y'); 
			//echo "<script>console.log('k brgaO " . $mes . "' );</script>";
			//echo "<script>console.log('k brgaO " . $year . "' );</script>";
			$consulta = "SELECT * FROM Asistencias WHERE YEAR(Fecha) = '$year' AND MONTH(Fecha) = '$mes' AND Red = '$red' ORDER BY Fecha";
            $ejecutar_consulta = $conexion->query($consulta); 
            $result_array = Array(); 
            $dates_array = Array();
            while($row = $ejecutar_consulta->fetch_assoc()){
                echo "<script>console.log('k brgaO " . $row["NumeroAsistentes"] . "' );</script>";  
				$result_array[] = $row["NumeroAsistentes"];  
                $dates_array[] = $row["Fecha"];
            }
			$json_array = json_encode($result_array);
            $date_json = json_encode($dates_array); 
        }
        else if($filter == "Year"){
            $year = $_POST["year"]; 
			//echo "<script>console.log('k brgaO " . $mes . "' );</script>";
			//echo "<script>console.log('k brgaO " . $year . "' );</script>";
			$consulta = "SELECT * FROM Asistencias WHERE YEAR(Fecha) = '$year' AND Red = '$red' ORDER BY Fecha";
            $ejecutar_consulta = $conexion->query($consulta); 
            $result_array = Array(); 
            $dates_array = Array();
            while($row = $ejecutar_consulta->fetch_assoc()){
                echo "<script>console.log('k brgaO " . $row["NumeroAsistentes"] . "' );</script>";  
				$result_array[] = $row["NumeroAsistentes"];  
                $dates_array[] = $row["Fecha"];
            }
			$json_array = json_encode($result_array);
            $date_json = json_encode($dates_array); 
        }
        else{
            $consulta = "SELECT * FROM Asistencias WHERE Red = '$red' ORDER BY Fecha";
            $ejecutar_consulta = $conexion->query($consulta); 
            $result_array = Array(); 
            $dates_array = Array();
            while($row = $ejecutar_consulta->fetch_assoc()){
                echo "<script>console.log('k brgaO " . $row["NumeroAsistentes"] . "' );</script>";  
				$result_array[] = $row["NumeroAsistentes"];  
                $dates_array[] = $row["Fecha"];
            }
			$json_array = json_encode($result_array);
            $date_json = json_encode($dates_array); 
        }


    }

?>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    var arrayObjects = <?php echo $json_array; ?>;
    var arrayDates = <?php echo $date_json; ?>;
    arrayObjects.forEach(element => console.log(element)); 

    var colorArray = []; 

    for(let i = 0; i < arrayObjects.length; i++){
        if(arrayObjects[i] > 9){
            colorArray[i] = "#008000";
        }
        else{
            colorArray[i] = "#FF0000";
        }
    }

    new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: arrayDates,
    datasets: [
      {
        label: "Asistentes",
        backgroundColor: colorArray,
        data: arrayObjects
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Gráfica Asistencia Células'
    }, 
    scales: {
      yAxes: [{
          ticks: {
              beginAtZero:true
          }
      }]
  }
  }
});
Chart.defaults.global.defaultFontColor='white';
</script>
<script>
    document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("bar-chart").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>