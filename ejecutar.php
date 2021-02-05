<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULAR EL AREA DE UN OCTÁGONO</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/bar.css">
    <link rel="stylesheet" href="CSS/fontello.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<?php
    $apotema = $_POST['apotema'];
    $longitud = $_POST['longitud'];
    $area = null;

    $area = (($longitud * $apotema) / 2 * 8 );
    echo"<header>
        <div class='contenedor'>
            <input type='checkbox' id='menu-bar'></input>
            <label class='icon-menu' for='menu-bar'></label>
            <nav class='menu'>
                <a href= >Calculo del Area de un Octágono</a>
                <a href='index.html'>inicio</a>
                <a href='index.html'>Limpiar</a>
            </nav>
        </div>
    </header>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='well well-sm'>
                        <fieldset>
                            <legend class='text-center header'>Resultado</legend>
                            <table class='table table-dark'>
                                <thead>
                                  <tr>
                                    <th scope='col'>Apotema</th>
                                    <th scope='col'>Longitud</th>
                                    <th scope='col'>Area del Octágono</th>
                                  </tr> 
                                </thead>
                                <tbody>
                                  <tr>
                                    <td> $apotema </td>
                                    <td> $longitud </td>
                                    <td> $area </td>
                                  </tr>
                                </tbody>
                              </table>
                        </fieldset>
                        <a  class=' btn btnclean btn-dark' href='index.html'>Regresar</a>;                </div>
                    </div>
                </div>
            </div> 
 "?>

</body>
</html>

