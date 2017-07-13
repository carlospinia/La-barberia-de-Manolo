<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>La barbería de Manolo</title>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/index.css">
        <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php include 'common/cabecera.php' ?>
        <div class="row">
            <!--movil
            <img class="responsive-img col s12 hide-on-med-and-up" src="imagenes/fotoPortada_degradado.jpg" alt=""/>
            -->
            <!--PC-->
            <!--izquierda -->

            <div class="col s12 m3 l5 hide-on-small-and-down" style="margin-top: 10%;">
                <h3 class="white-text center-align">Horario</h3>
                <p class="white-text center-align">Lunes a viernes: 9:00h-14:00h y 16:00-8:30h</p>
                <p class="white-text center-align">Sabados: 9:00h-14:00h y 16:00-8:30h</p>
            </div>

            <img class="col s12 m9 l6" src="imagenes/fotoPortada2.jpg" alt=""/>

            <div class="col s12 m3 l5 hide-on-med-and-up">
                <h3 class="white-text center-align">Horario</h3>
                <p class="white-text center-align">Lunes a viernes: 9:00h-14:00h y 16:00-8:30h</p>
                <p class="white-text center-align">Sabados: 9:00h-14:00h y 16:00-8:30h</p>
            </div>
            <!--derecha
            <img class="responsive-img col m4 l4 hide-on-small-only" src="imagenes/american-crew-aleksandr-chasovskih-02_1000.jpg" alt=""/>
            <div class="col m2 l2"></div>
            -->

            <!-- foto sillones
            <div class="col m1 l1"></div>
            <img class="responsive-img col m10 l10" src="imagenes/fotoBarbería.jpg" alt=""/>
            <div class="col m1 l1"></div>
            -->

        </div>
        
<!--        --><?php //include 'common/float_menu.php' ?>

        <!-- navBar -->
        <?php include 'common/navLateral.php' ?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>
