<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>La barbería de Manolo</title>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/contacto.css">
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

            <div class="col s12 m3 l5 hide-on-small-and-down" style="line-height: 1;">
                <p class="white-text center-align" style="font-family: Moandhand; font-size: x-large">Lunes a viernes:</p>
                <p class="white-text center-align" style="font-family: Moandhand; font-size: x-large">9:00h-14:00h y 16:00-20:00h</p>
                <p class="white-text center-align" style="font-family: Moandhand; font-size: x-large">Sabados: 9:00h-14:00h</p>

                <h3 class="white-text hide-on-small-and-down center-align" style="font-family: Moandhand">Llámanos: </h3>
                <h3 class="white-text hide-on-small-and-down center-align" style="font-family: Moandhand">91 463 26 80</h3>
                <div class="row">
                    <div id="maps" class="col m8 l8 offset-m2 offset-l2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9108914643425!2d-3.7369029847296886!3d40.410824779365825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227fd6a4125fd%3A0x2018aaca7692abbf!2sCalle+Repull%C3%A9s+y+Vargas%2C+3%2C+28011+Madrid!5e0!3m2!1ses!2ses!4v1500550126487" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

            <img class="col s12 m9 l6" src="imagenes/index/fotoPortada2.jpg" alt=""/>

            <div class="col s12 m3 l5 hide-on-med-and-up" style="line-height: 0.8;">
                <p class="white-text center-align" style="font-family: Moandhand; font-size: large">Lunes a viernes:</p>
                <p class="white-text center-align" style="font-family: Moandhand; font-size: large">9:00h-14:00h y 16:00-20:00h</p>
                <p class="white-text center-align" style="font-family: Moandhand; font-size: large">Sabados: 9:00h-14:00h</p>

                <a href="tel:914632680" class="btn hide-on-med-and-up green white-text col s8 offset-s2"
                   style="margin-bottom: 5%; font-family: Moandhand; font-size: small; padding-top: 5px;">Llámanos: 91 463 26 80
                </a>

                <div id="maps" class="col s8 offset-s2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9108914643425!2d-3.7369029847296886!3d40.410824779365825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227fd6a4125fd%3A0x2018aaca7692abbf!2sCalle+Repull%C3%A9s+y+Vargas%2C+3%2C+28011+Madrid!5e0!3m2!1ses!2ses!4v1500550126487" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- navBar -->
        <?php include 'common/navLateral.php' ?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>
