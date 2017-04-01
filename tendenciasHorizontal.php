/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 1/04/17
 * Time: 16:10
 */

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/tendenciasHorizontal.css">
    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<?php include 'common/cabecera.php' ?>

<div id="divGaleriaLarge" class="hide-on-med-and-down">
    <ul class="obgaleria" id="galeria1">
        <li><img src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img src="imagenes/american_crew-brandt-02_1000.jpg"/></li>
        <li><img src="imagenes/fotoPortada.jpg"/></li>
        <li><img src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img src="imagenes/american_crew-brandt-02_1000.jpg"/></li>
        <li><img src="imagenes/fotoPortada.jpg"/></li>
        <li><img src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img src="imagenes/American-Crew-Independent-1.jpg"/></li>
    </ul>
</div>

<div class="hide-on-large-only">
    <ul id="galeria2">
        <li><img class="responsive-img" src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/american_crew-brandt-02_1000.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/fotoPortada.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/american_crew-brandt-02_1000.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/fotoPortada.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg"/></li>
        <li><img class="responsive-img" src="imagenes/American-Crew-Independent-1.jpg"/></li>
    </ul>
</div>

<?php include 'common/float_menu.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>//<![CDATA[
    var prop = 100.00; // proporción alto/ancho*100 imagen principal
    $(document).ready(function() {
        $("ul.obgaleria").each(function() {
            var id = "#" + $(this).attr("id");
            var ancho = 100 / $(id + " li").length;
            $("head").append("<style>" + id + "{padding: 0 0 " + (prop + ancho) + "% 0;} " + id + " li{width:" + ancho + "%;padding: 0 0 " + ancho + "% 0;} " + id + " li:last-child {padding-bottom: " + prop + "%;}</style>");
            $(id + " li:first-child").clone().appendTo(id);
            $(id + " li:last-child").css({
                "width": "100%"
            });
            $(id + " li").click(function() {
                $(id + " li:last-child").remove()
                $(this).clone().appendTo(id).animate({
                    width: "100%"
                }, 200);
            });
        });
    });
    //]]></script>
</body>

</html>
