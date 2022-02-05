<?php

function conectarse()
{
         /*$servidor= "localhost:3306";   //"www.industrybook.com.mx";    //"localhost";
         $usuario="visual";
         $password="Antonio_13_01_14";
         $bd="prospecta";*/

          $servidor= "localhost:3306";   //"www.industrybook.com.mx";    //"localhost";
         $usuario="visual";
         $password="Antonio_13_01_14";
         $bd="CCM";

	
	
         
        $conectar=new mysqli($servidor,$usuario,$password,$bd);
        return $conectar;

}
$conexion= conectarse();
$conexiong= conectarse();
mysqli_select_db($conexion,"CCM") or die("no se pudo conectar a la db");
//echo("bd Conectada encuestas correctamente <br />");

?>