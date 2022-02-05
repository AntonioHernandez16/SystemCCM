<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0px;
      font-family: Arial, Helvetica, sans-serif;
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

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-image: url('fondo.jpg');
}

.form-register {
  width: 400px;
  background: #24303c;
  padding: 30px;
  margin: auto;
  margin-top: 2%;
  border-radius: 4px;
  font-family: Arial, Helvetica, sans-serif;
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
  font-family: Arial, Helvetica, sans-serif;
  font-size: 18px;
  color: white;
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

@media screen and (max-width: 600px) {
  .col-25, .form-register, .p, .botons, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
  
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registrar Asistente</title>
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
                <li><a href="Asistencia.php">Célula</a></li>
                <li><a href="Graficas.php">Gráficas</a></li>

           
              </ul>
          </div>
        </div>
        <form class="form-register" action="AgregarAsistente.php" method="post">
            <h4>Agrega Asistente</h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidoP" id="apellidoPaterno" placeholder="Ingrese su Apellido Paterno">
            <input class="controls" type="text" name="apellidoM" id="apellidoMaterno" placeholder="Ingrese su Apellido Materno">
            <input class="controls" type="tel" name="telefono" id="telefono" placeholder="Teléfono">
            <p>Estado Civil: </p>
            <div class="controls">
                <label class="radio-inline">
                    <input  type="radio" name="estadoCivil" id="estadoCivil" title="Estado Civil" value="Casado"> Casado
                </label>
                <label class="radio-inline">
                    <input type="radio" name="estadoCivil" id="estadoCivil" title="Estado Civil" value="Soltero"> Soltero
                </label>
                <label class="radio-inline">
                    <input type="radio" name="estadoCivil" id="estadoCivil" title="Estado Civil" value="Viudo"> Viudo
                </label>
        
            </div>
            
            <p>Selecciona la red: </p>
            <div class="controls">
                <label for="red">Red:  </label>
                <select name="red" id="red">
                    <option value=1> 1 </option>
                    <option value=2> 2 </option>
                    <option value=3> 3 </option>
                    <option value=4> 4 </option>
                    <option value=5> 5 </option>
                    <option value=6> 6 </option>
                    <option value=7> 7 </option>
                </select>
            </div>
        
            
			<input class="botons" type="submit" value="Registrar">
        </form>
  </body>
  </html>

