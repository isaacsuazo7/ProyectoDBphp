<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGBD</title>

    <script src="./ProyectoDB/Librerias//materialize/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <script type="text/javascript">
          $(document).ready(function(){
    $('select').formSelect();
        });
    </script>
</head>
<body>

    <div class="row">
        <!-- Formulario -->
        <div class="col l4" style ="position:absolute; top:15%">
        <h5 class="blue-text">CREAR TABLA</h5><br><br>
        <form action="control.php" method="post">´

        <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
        
       
  </div>
  

        </form>
        </div>

    </h1>
</body>
</html>