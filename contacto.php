<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contacto.css">
<!--    <link rel="stylesheet" href="css/index.css">-->
    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!-- necesario para que funcione la parte de facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<?php include 'common/cabecera.php' ?>

<div class="row">
        <div id="maps" class="col s12 m6 l6 offset-m1 offset-l1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.908422187378!2d-3.7369510847296703!3d40.410879479365796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227fd6a368ea1%3A0x3d4916be90800384!2sLa+Barber%C3%ADa+Manolo!5e0!3m2!1ses!2ses!4v1500474887066" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col s12 m3 l3 offset-m1 offset-l1" style="height: 450px">
            <h3 class="white-text center-align">Horario:</h3>
            <p class="white-text center-align"> Lunes a Viernes: 9:00h a 14:00h y 16:00h a 8:00h</p>
            <p class="white-text center-align"> Sábados: 9:00h a 14:00h</p>

            <h3 class="white-text hide-on-small-and-down center-align">Llámanos: </h3>
            <h4 class="white-text hide-on-small-and-down center-align">91 463 26 80</h4>

            <a href="tel:914632680" class="hide-on-med-and-up waves-effect waves-light green btn-large col s10 offset-s1"><i class="material-icons right">telephone</i>Llámanos</a>
        </div>

    <div class="col s12 m5 l5 offset-l1 offset-m1">
        <img class="responsive-img col s8 m6 l6" src="imagenes/facebook.png" style="margin-top: 20px; margin-bottom: 35px">
        <div class="fb-page" data-href="https://www.facebook.com/labarberiademanolo" data-tabs="timeline" data-width="400" data-height="610" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/labarberiademanolo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/labarberiademanolo">La Barbería de Manolo</a></blockquote></div>
    </div>

    <!-- LightWidget WIDGET -->
    <div class="col s12 m5 l5">
        <img class="responsive-img col s8 m6 l6" src="imagenes/instagram-logo-black-on-white.png" style="height: 110px">
        <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/74b8b310c510561bbd3a78f875ba8586.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
    </div>

    <div class="col m1 l1"></div>
</div>

<!--        --><?php //include 'common/float_menu.php' ?>

<!-- navBar -->
<?php include 'common/navLateral.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
