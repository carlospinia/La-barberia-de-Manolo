<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="image grid, effect, inspiration, css, javascript, animation, masonry" />

    <title>La barbería de Manolo</title>
    <link rel="stylesheet" href="css/menu.css">
    <link id="favicon" rel="icon" href="razor_black.png" type="image/png"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/tendenciasGrid.css" />
    <script src="js/modernizr-custom.js"></script>
</head>

<body class="demo-1">
<div class="container">

    <?php include 'common/cabecera.php' ?>

    <div class="content">
        <div class="grid">
            <div class="grid__item zoomIt" data-size="1280x853">
                <a href="imagenes/tendencias/1.jpg" class="img-wrap"><img src="imagenes/tendencias/1.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="958x1280">
                <a href="imagenes/tendencias/2.jpg" class="img-wrap"><img src="imagenes/tendencias/2.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="837x1280">
                <a href="imagenes/tendencias/3.jpg" class="img-wrap"><img src="imagenes/tendencias/3.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x961">
                <a href="imagenes/tendencias/4.jpg" class="img-wrap"><img src="imagenes/tendencias/4.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1131">
                <a href="imagenes/tendencias/5.jpg" class="img-wrap"><img src="imagenes/tendencias/5.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x857">
                <a href="imagenes/tendencias/6.jpg" class="img-wrap"><img src="imagenes/tendencias/6.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/7.jpg" class="img-wrap"><img src="imagenes/tendencias/7.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x853">
                <a href="imagenes/tendencias/8.jpg" class="img-wrap"><img src="imagenes/tendencias/8.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="865x1280">
                <a href="imagenes/tendencias/9.jpg" class="img-wrap"><img src="imagenes/tendencias/9.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/10.jpg" class="img-wrap"><img src="imagenes/tendencias/10.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/11.jpg" class="img-wrap"><img src="imagenes/tendencias/11.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/12.jpg" class="img-wrap"><img src="imagenes/tendencias/12.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/13.jpg" class="img-wrap"><img src="imagenes/tendencias/13.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/14.jpg" class="img-wrap"><img src="imagenes/tendencias/14.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/15.jpg" class="img-wrap"><img src="imagenes/tendencias/15.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
            <div class="grid__item zoomIt" data-size="1280x1280">
                <a href="imagenes/tendencias/16.jpg" class="img-wrap"><img src="imagenes/tendencias/16.jpg"/>
                    <div class="description description--grid"></div>
                </a>
            </div>
        </div>
        <!-- /grid -->
        <div class="preview">
            <button class="action action--close transparent"><i class="material-icons medium">close</i><span class="text-hidden">Close</span></button>
            <div class="description description--preview"></div>
        </div>
        <!-- /preview -->
    </div>
    <?php include 'common/navLateral.php' ?>
<!--    --><?php //include 'common/float_menu.php' ?>
</div>
<!-- /container -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
<script>
    (function() {
        // create SVG circle overlay and append it to the preview element
        function createCircleOverlay(previewEl) {
            var dummy = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            dummy.setAttributeNS(null, 'version', '1.1');
            dummy.setAttributeNS(null, 'width', '100%');
            dummy.setAttributeNS(null, 'height', '100%');
            dummy.setAttributeNS(null, 'class', 'overlay');
            var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
            var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            circle.setAttributeNS(null, 'cx', 0);
            circle.setAttributeNS(null, 'cy', 0);
            circle.setAttributeNS(null, 'r', Math.sqrt(Math.pow(previewEl.offsetWidth,2) + Math.pow(previewEl.offsetHeight,2)));
            dummy.appendChild(g);
            g.appendChild(circle);
            previewEl.appendChild(dummy);
        }

        new GridFx(document.querySelector('.grid'), {
            onInit : function(instance) {
                createCircleOverlay(instance.previewEl);
            },
            onResize : function(instance) {
                instance.previewEl.querySelector('svg circle').setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
            },
            onOpenItem : function(instance, item) {
                // item's image
                var gridImg = item.querySelector('img'),
                    gridImgOffset = gridImg.getBoundingClientRect(),
                    win = {width: document.documentElement.clientWidth, height: window.innerHeight},
                    SVGCircleGroupEl = instance.previewEl.querySelector('svg > g'),
                    SVGCircleEl = SVGCircleGroupEl.querySelector('circle');

                SVGCircleEl.setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
                // set the transform for the SVG g node. This will animate the circle overlay. The origin of the circle depends on the position of the clicked item.
                if( gridImgOffset.left + gridImg.offsetWidth/2 < win.width/2 ) {
                    SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(' + win.width + ', ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
                }
                else {
                    SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(0, ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
                }
            }
        });
    })();
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
