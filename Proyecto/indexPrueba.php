<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGBD</title>

    <!-- Bootstrap core CSS -->
    <link href="https://baulphp.com/css/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://baulphp.com/css/assets/sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://baulphp.com/css/assets/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.js"></SCRIPT>

    <script type="text/javascript">
  $(function () {
    $('select').selectpicker();
});
    </script>

    <script>
        function AgregarMas() {
            $("<div>").load("multiple.php", function() {
                $("#atributo").append($(this).html());
            });
        }

        function BorrarRegistro() {
            $('div.lista-producto').each(function(index, item) {
                jQuery(':checkbox', this).each(function() {
                    if ($(this).is(':checked')) {
                        $(item).remove();
                    }
                });
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <h3 class="mt-5"><a href="https://www.baulphp.com/inputs-dinamicos-usando-jquery-y-php/">Crear Tabla</a></h3>
        <hr>
        <div class="row">
            <div class="col-12 col-md-12">

                <FORM name="frmProduct" method="post" action="tablas.php">
                    <div id="outer">
                        <div id="header">
                            <div class="float-left col-heading"> Nombre Atributo</div>
                            <div class="float-left col-heading2"> Tip de Dato</div>

                        </div>
                        <div id="atributo">
                            <div class="lista-producto float-clear" style="clear:both;">
                                <ul class="list-group">
                                    <li class="list-group-item">

                                        <div class="float-left"><input class="form-control" type="text" name="atributo[]" style="width:110px;" /></div>
                                        <div class="float-left">
                                            <select class="selectpicker"name="tipo[]" style="width:110px;">
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
                                            </select></div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-action float-clear">
                            <input class="btn btn-success" type="button" name="agregar_registros" value="Agregar Mas" onClick="AgregarMas();" />

                            <span class="success"></span>
                        </div>
                        <div style="position: relative;">
                            <inpuT disabled class="btn btn-primary" type="submit" name="guardar" value="Guardar Ahora" />
                        </div>
                    </div>
                </form>


                <!-- Fin Contenido -->
            </div>
        </div>
        <!-- Fin row -->


    </div>
</body>

</html>