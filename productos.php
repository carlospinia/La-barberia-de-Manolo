<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">

    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/productos.css">
</head>

<body>
<?php include 'common/cabeceraProductos.php' ?>

<div id="style_tab" class="col s12"><?php include 'prod_style.php' ?></div>
<div id="hair_and_body_tab" class="col s12"><?php include 'prod_hair-and-body-care.php' ?></div>
<div id="shave_tab" class="col s12"><?php include 'prod_shave.php' ?></div>

<?php include 'common/navLateral.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
