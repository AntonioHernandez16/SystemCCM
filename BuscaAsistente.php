<style>
    * {
      box-sizing: border-box;
    }
    
    th{
      color: black;
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
  
    
    @media (max-width:750px) {
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

    #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 99%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  margin-left: auto;
  margin-right: auto;
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 15px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
	color: black; 
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
  margin-top: 1%;
  text-align: center;
}

  </style>
  
 
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Buscar Asistente</title>
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
              <li><a href="RegistrarAsistente.php">Nuevo</a></li>
              <li><a href="BuscarAsistente.php">Buscar</a></li>
              <li><a href="Asistencia.php">C??lula</a></li>
              <li><a href="Graficas.php">Gr??ficas</a></li>
         
            </ul>
        </div>
      </div>
        <input class="controls" type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por Nombre...">
	  <table class="controls" id="myTable">
                <tr class="header">
                <th style="width:60%;">Nombre</th>
                <th style="width:40%;">Red</th>
                <th style="width:40%;">Tel??fono</th>
                </tr>
        <?php
            include("conexionDB.php");
            session_start(); 
            $red = $_SESSION["red"];
		 
            $usuario = $_SESSION["usuario"]; 
		  	
            if($red == 0){
        // Consulta general 
                $consulta = "SELECT * FROM Asistente"; 
            }
            else{
				 
                $consulta = "SELECT * FROM Asistente WHERE Red = $red";
            }
			
            $ejecutar_consulta = $conexion->query($consulta); 
    		
            if($usuario == ""){	
				echo "<script>window.location.href='index.php'; </script>";
			}
	  		
	  		else {
				
          		
        		while($row = $ejecutar_consulta->fetch_assoc()){
					
          			echo "
					<tr>
            			<td>".$row["Nombre"]. " " . $row["ApellidoPaterno"] . " " . $row["ApellidoMaterno"] ."</td>
            			<td>".$row["Red"]."</td>
            			<td>".$row["Telefono"]."</td>
        			</tr>
					";
                    
                }
                 
			
			}
        ?>
	  </table>

        
        
  </body>
  </html>

  <script>
      
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
  </script>