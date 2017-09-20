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
    <link rel="stylesheet" href="css/tendenciasVertical.css">
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

<div id="divGaleriaLarge" class="hide-on-med-and-down container">
    <ul id="gallery">
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

<div class="hide-on-large-only">
    <ul>
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

<script type="text/javascript">
    //<![CDATA[
    var gal = {
        init : function() {
            if (!document.getElementById || !document.createElement || !document.appendChild) return false;
            if (document.getElementById('gallery')) document.getElementById('gallery').id = 'jgal';
            var li = document.getElementById('jgal').getElementsByTagName('li');
            li[0].className = 'active';
            for (i=0; i<li.length; i++) {
                li[i].style.backgroundImage = 'url(' + li[i].getElementsByTagName('img')[0].src + ')';
                li[i].title = li[i].getElementsByTagName('img')[0].alt;
                gal.addEvent(li[i],'click',function() {
                    var im = document.getElementById('jgal').getElementsByTagName('li');
                    for (j=0; j<im.length; j++) {
                        im[j].className = '';
                    }
                    this.className = 'active';
                });
            }
        },
        addEvent : function(obj, type, fn) {
            if (obj.addEventListener) {
                obj.addEventListener(type, fn, false);
            }
            else if (obj.attachEvent) {
                obj["e"+type+fn] = fn;
                obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
                obj.attachEvent("on"+type, obj[type+fn]);
            }
        }
    }
    gal.addEvent(window,'load', function() {
        gal.init();
    });
    //]]>
</script>
</body>

</html>
