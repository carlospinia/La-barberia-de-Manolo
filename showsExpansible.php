<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/shows.css">
    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="row">
<?php include 'common/cabecera.php' ?>

<div class="col s12 m6 offset-m3">
    <ul class="collapsible" data-collapsible="accordion" style="margin-top: 8%; border: none;">
        <li style="border: none; margin: 5px; font-family: Moandhand; font-size: large;">
            <div class="collapsible-header center" style="border:none; border-radius: 5px;">Oscar mundial a la elegancia</div>
            <div class="collapsible-body black" style="border:none;">
                <div class="video-container">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/P7FHOC9k6Zk?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </li>
        <li style="border:none; margin: 5px; font-family: Moandhand; font-size: large;">
            <div class="collapsible-header center" style="border:none; border-radius: 5px;">Show otoño-invierno</div>
            <div class="collapsible-body black center-align" style="border:none;">
                <div class="video-container">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/A978korrZxw?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </li>
        <li style="border: none; margin: 5px; font-family: Moandhand; font-size: large;">
            <div class="collapsible-header center" style="border:none; border-radius: 5px;">Gala Bell Pell</div>
            <div class="collapsible-body black" style="border:none;">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/junrTovmdq0?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- navBar -->
<?php include 'common/navLateral.php' ?>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.collapsible').collapsible();
    });
</script>
</body>
</html>
