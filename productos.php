<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/productos.css">
    <link id="favicon" rel="icon" href="imagenes/icons/razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include 'common/cabecera.php' ?>

<h3 class="white-text center-align">Productos</h3>

<div class="row">

    <div class="col s12 m4">
        <div class="card black white-text">
            <div class="card-image small">
                <a href="prod_hair-and-body-care.php"><img src="imagenes/productos/prod-hairandbodycare.jpg"></a>
            </div>
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card black white-text">
            <div id="div-img-producto" class="card-image">
                <a href="prod_shave.php"><img  src="imagenes/productos/prod-shave.jpg"></a>
            </div>
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card black white-text">
            <div id="div-img-producto" class="card-image">
                <a href="prod_style.php"><img src="imagenes/productos/prod-style.jpg"></a>
            </div>
        </div>
    </div>

</div>

<?php include 'common/float_menu.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
