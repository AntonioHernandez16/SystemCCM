<style>
    body
    {
       background-image: url("fondo.jpg");
       background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: right; 
        background-size: 35%;
        margin-left: 10%;
        margin-top: 10%;
    }
    input,select
    {
    width: 100%;    
    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Encuestas</title>
    </head>
    <header><h1>Inicio de sesion  <br> </h1><h2>Ingrese su usuario y contraseña</h2></header>
    <body>
     
      <form method="post" id="formulario" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                 Usuario   
                </td>
                <td>
                    <input type="text" name="usuario">
                </td>
            </tr>
            <tr>
                <td>
            Contraseña        
                </td>
                <td>
                    <input type="password" name="contrasena">
                </td>
            </tr>
            <tr><td colspan="2">
            <center><input type="submit" name="entrar" value="Entrar"></center>
            </td></tr>
        </table>
      </form>    
    </body>
</html>
<?php
if (isset($_POST['entrar']))
{
                if(isset($_POST['usuario']) && !empty($_POST['usuario'])
                   && isset($_POST['contrasena']) && !empty($_POST['contrasena']))
                {
                    
                  //  include ("php/conectarx.php");
					 include ("conexion.php");
                    
                   $email=$_POST['usuario'];
                   
                   // $consulta= "SELECT * FROM usuarios";
                   // $ejecutar_consulta= $conexion->query($consulta);   
                    
                        
                    $con=mysqli_connect($host,$user,$pw,$db) or die ("error al conectar con el servidor");
                    mysqli_select_db($con,$db) or die ("error al conectar a la base de datos");
                    
                    $cus=$_POST['usuario'];
					$cpaw=$_POST['contrasena'];
                     $consulta= "SELECT * FROM Usuarios WHERE  usuario='$cus' and password='$cpaw'";
                    $ejecutar_consulta= $con->query($consulta);   
                    
                    $num_regs= $ejecutar_consulta->num_rows;
					while($row = $ejecutar_consulta->fetch_array(MYSQLI_ASSOC)){
						
						$red = $row['red'];
						
					}
					
					echo "<script>console.log('Debug RED: " . $red . "' );</script>"; 
					
                    if($num_regs==0)
                    {
                      // echo "aaa".$cpaw."ggggeehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhfghgfhgfhfghfhfhfhfhf";
                       echo "<script>alert(\"Usuario no registrado o datos incorrectos....\");</script>";
					//	header('refresh:1; url=agregacte.php');   
                    } 
                    else
                    {
                        $id_nivel ="1";
                      session_start();
					
                      $_SESSION["envia_us"]=$_POST['contrasena'];
                      $_SESSION["usuario"]=$_POST['usuario'];
                      $_SESSION["sucursalid"]="1";
                      $_SESSION["envia_agre"]="0";
                      $_SESSION["red"]=$red;
				     	
						while($registro = $ejecutar_consulta->fetch_assoc())
                        {
                           $nombreb=utf8_encode($registro["pais"]);
                           $_SESSION["coo_id"]=utf8_encode($registro["coo_id"]);
						  // $_SESSION["seccion_id"]=$num_regs['seccion'];
						}
						
						
						header('refresh:1; url=RegistrarAsistente.php'); 
						
                                           }
                    
                    
                    
                            
                }
}
           
?>