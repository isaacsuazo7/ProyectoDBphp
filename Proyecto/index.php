<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGBD</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    	
    <script type="text/javascript">
          $(document).ready(function(){
    $('select').formSelect();
        });
    </script>
</head>
<body>

    <div class="container" style="width: 88%;height: 100%;max-width: 100%;margin: center;">
    <div class="row" style="width: 100%;height: 100%;">
        <!-- Formulario -->
        <div class="col s8">
        <h5 class="blue-text">CREAR TABLA</h5><br>
        <form action="tablas.php" method="post">

        <div class="input-field col4">
            <input type="text" name="nombreTabla" value="" placeholder="Nombre de la Tabla">
            <label for="nt">Tabla name</label>
        </div>

        <div class="input-field">
            <select name="t1">
             <option value="" disabled selected>Tipo de Dato</option>
             <option value="bignit">bigint</option>
             <option value="binary(50)">binary(50)</option>
             <option value="bit">bit</option>
             <option value="char(10)">char(10)</option>
             <option value="date">date</option>
             <option value="datetime">datetime</option>
             <option value="decimal(18,0)">decimal(18,0)</option>
             <option value="float">float</option>
             <option value="INT">int</option>
             <option value="money">money</option>
             <option value="nchar(10)">nchar(10)</option>
             <option value="ntext">ntext</option>
             <option value="numeric(18,0)">numeric(18,0)</option>
             <option value="nvarchar(50)">nvarchar(50)</option>
             <option value="nvarchar(MAX)">nvarchar(MAX)</option>
             <option value="text">text</option>
             <option value="varchar(50)">varchar(50)</option>
             <option value="varchar(max)">varchar(max)</option>
            </select>
        
            <input type="text" name="a1" value="" placeholder="Nombre del atributo">
            <label for="a1">Atributo 1</label>
            
        </div>
        
        <div class="input-field">
            <select name="t2">
             <option value="" disabled selected>Tipo de Dato</option>
             <option value="">bigint</option>
             <option value="binary(50)">binary(50)</option>
             <option value="bit">bit</option>
             <option value="char(10)">char(10)</option>
             <option value="date">date</option>
             <option value="datetime">datetime</option>
             <option value="decimal(18,0)">decimal(18,0)</option>
             <option value="float">float</option>
             <option value="INT">int</option>
             <option value="money">money</option>
             <option value="nchar(10)">nchar(10)</option>
             <option value="ntext">ntext</option>
             <option value="numeric(18,0)">numeric(18,0)</option>
             <option value="nvarchar(50)">nvarchar(50)</option>
             <option value="nvarchar(MAX)">nvarchar(MAX)</option>
             <option value="text">text</option>
             <option value="varchar(50)">varchar(50)</option>
             <option value="varchar(max)">varchar(max)</option>
            </select>
        
            <input type="text" name="a2" value="" placeholder="Nombre del atributo">
            <label for="a2">Atributo 2</label>
            
        </div>

        <div class="input-field">
            <select name="t3">
             <option value="" disabled selected>Tipo de Dato</option>
             <option value="bignit">bigint</option>
             <option value="binary(50)">binary(50)</option>
             <option value="bit">bit</option>
             <option value="char(10)">char(10)</option>
             <option value="date">date</option>
             <option value="datetime">datetime</option>
             <option value="decimal(18,0)">decimal(18,0)</option>
             <option value="float">float</option>
             <option value="INT">int</option>
             <option value="money">money</option>
             <option value="nchar(10)">nchar(10)</option>
             <option value="ntext">ntext</option>
             <option value="numeric(18,0)">numeric(18,0)</option>
             <option value="nvarchar(50)">nvarchar(50)</option>
             <option value="nvarchar(MAX)">nvarchar(MAX)</option>
             <option value="text">text</option>
             <option value="varchar(50)">varchar(50)</option>
             <option value="varchar(max)">varchar(max)</option>
            </select>
        
            <input type="text" name="a3" value="" placeholder="Nombre del atributo">
            <label for="a3">Atributo 3</label>
            
        </div>

        <div class="input-field">
            <select name="t4">
             <option value="" disabled selected>Tipo de Dato</option>
             <option value="bignit">bigint</option>
             <option value="binary(50)">binary(50)</option>
             <option value="bit">bit</option>
             <option value="char(10)">char(10)</option>
             <option value="date">date</option>
             <option value="datetime">datetime</option>
             <option value="decimal(18,0)">decimal(18,0)</option>
             <option value="float">float</option>
             <option value="INT">int</option>
             <option value="money">money</option>
             <option value="nchar(10)">nchar(10)</option>
             <option value="ntext">ntext</option>
             <option value="numeric(18,0)">numeric(18,0)</option>
             <option value="nvarchar(50)">nvarchar(50)</option>
             <option value="nvarchar(MAX)">nvarchar(MAX)</option>
             <option value="text">text</option>
             <option value="varchar(50)">varchar(50)</option>
             <option value="varchar(max)">varchar(max)</option>
            </select>
        
            <input type="text" name="a4" value="" placeholder="Nombre del atributo">
            <label for="a4">Atributo 4</label>
            
        </div>
  
        <div class="input-field">
            <button type="submit" class="blue-btn-small">Guardar</button>
        </div>
        </form>



        <!-- Formulario 
    <div class="col l7 ofset-l5" style ="position:absolute; top:15%">
        <table>
        <h5 class="blue-text">TABLA</h5><br><br>
            <thead>
                <tr>
                    <th>header</th>
                </tr>
            </thead>
        </table>
    </div>-->

</div>
    </div>
</body>
</html>