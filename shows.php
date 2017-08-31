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
<body>
<?php include 'common/cabeceraShows.php' ?>

<div id="1">
    <div class="row" style="margin-top: 50px;">
        <video class="responsive-video col s12 m6 offset-m3" controls>
            <source src="imagenes/shows/Gala_Bell_Pel-caballeros.mp4" type="video/mp4">
        </video>
    </div>
</div>

<div id="2">
    <div class="row" style="margin-top: 80px;">
        <div class="col s12 m6 offset-m3">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/junrTovmdq0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div id="3">
    <div class="row" style="margin-top: 80px;">
        <div class="col s12 m6 offset-m3">
            <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/P7FHOC9k6Zk" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- navBar -->
<?php include 'common/navLateral.php' ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
