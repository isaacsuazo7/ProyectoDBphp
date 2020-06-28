<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGBD</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">CRUD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/insertar_registros.php">CREAR TABLAS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/relaciones.php">RELACIONES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>

    <div class="row">
        <!-- Formulario -->
        <div class="col l4" style="position:absolute; top:15%">
            <h5 class="blue-text">CRUD</h5><br>
            <form action="control.php" method="POST" accept-charset="utf-8">



                <div class="input-field">
                    <input type="text" name="a1" value="" placeholder="Nombre del atributo">
                    <label for="a1">Atributo 1</label>
                </div>

                <div class="input-field">
                    <input type="text" name="a2" value="" placeholder="Nombre del atributo">
                    <label for="a2">Atributo 2</label>
                </div>

                <div class="input-field">
                    <input type="text" name="a3" value="" placeholder="Nombre del atributo">
                    <label for="a3">Atributo 3</label>

                </div>

                <div class="input-field">
                    <input type="text" name="a4" value="" placeholder="Nombre del atributo">
                    <label for="a4">Atributo 4</label>
                </div>




                <div class="input-field">
                    <button type="submit" class="btn btn-small" name="btn_guardar">Guardar</button>
                </div>


            </form>
        </div>


        <!-- Formulario -->
        <div class="col l7 offset-l5" style="position:absolute; top:15%">
            <table>
                <h5 class="blue-text">TABLA</h5><br><br>
                <thead>
                    <tr>
                        <th>atributo 1</th>
                        <th>atributo 2</th>
                        <th>atributo 3</th>
                        <th>atributo 4</th>
                        <th></th>
                    </tr>
                </thead>

                <body>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#" class="btn btn-small">Editar</a></td>
                    </tr>
                </body>
            </table>
        </div>

    </div>
</body>

</html>