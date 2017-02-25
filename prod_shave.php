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

    <h3 class="white-text center-align">Shave</h3>

    <div class="row">

        <div class="col s12 m3">
            <div class="card black white-text">
                <div id="div-img-producto" class="card-image">
                    <img src="imagenes/productos/shave/moisturizing-shave-cream.jpg">
                </div>
                <div class="card-content black white-text">
                    <p class="card-title center-align">Moisturizing shave cream</p>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>


        <div class="col s12 m3">
            <div class="card black white-text">
                <div class="card-image small">
                    <img src="imagenes/productos/shave/post-shave-cooling-lotion.jpg">
                </div>
                <div class="card-content black white-text">
                    <p class="card-title center-align">Post shave cooling lotion</p>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>


        <div class="col s12 m3">
            <div class="card black white-text">
                <div id="div-img-producto" class="card-image">
                    <img id="img-producto" src="imagenes/productos/shave/precision-shave-gel.jpg">
                </div>
                <div class="card-content black white-text">
                    <p class="card-title center-align">Precision shave gel</p>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card black white-text">
                <div class="card-image">
                    <img src="imagenes/productos/shave/ultra-gliding-shave-oil.jpg">
                </div>
                <div class="card-content black white-text">
                    <p class="card-title center-align">Ultra gliding shave oil</p>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

    </div>

    <?php include 'common/float_menu.php' ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
