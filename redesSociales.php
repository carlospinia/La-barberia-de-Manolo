<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
<!--    <link rel="stylesheet" href="css/index.css">-->
    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="background: black; margin-top: 100px">
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
    <!-- LightWidget WIDGET -->
    <div class="col s12 m5 l5 offset-l1 offset-m1">
        <a href="https://www.instagram.com/labarberiademanolo"><img class="responsive-img col s8 m6 l6" src="imagenes/redes_sociales/instagram-logo-black-on-white.png" style="height: 110px"></a>
        <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/c33aa2a929e250e3b876296c19f3f07d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>    </div>

    <div class="col s12 m5 l5 offset-l1 offset-m1">
        <a href="https://www.facebook.com/labarberiademanolo"><img class="responsive-img col s8 m6 l6" src="imagenes/redes_sociales/facebook.png" style="margin-top: 20px; margin-bottom: 35px"></a>
        <div class="fb-page" data-href="https://www.facebook.com/labarberiademanolo" data-tabs="timeline" data-width="400" data-height="610" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/labarberiademanolo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/labarberiademanolo">La Barbería de Manolo</a></blockquote></div>
    </div>
</div>

<!-- navBar -->
<?php include 'common/navLateral.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
