<!DOCTYPE HTML>
<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>LabeMotion - Column Layout - CSS Generator code</title>
        <style>
            html, body{margin: 0; padding: 0; vertical-align: baseline;}
            .container {
                display: block;
                clear: both;
                width: 100%;
                min-height: 10px;
                margin: 0 auto;
                padding: 0;    
                position:relative;
                left:0px;
            }
            .row {clear: both; max-width: 1200px; margin: 0 auto;}
            .col-p_20_4{float:left; margin-right:1.6666666666667%; width:23.75%;}
            .last{margin-right: 0px !important;}
            @media handheld, only screen and (max-width: 767px) {
                .col-p_20_4{width:100%}
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>LabeMotion - Column Layout - CSS Generator code</h2>
                <h4>Make your responsive layout</h4>
                <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
                    <div class="col-p_20_4">
                        Ancho de pagina<br />
                        <input type="text" name="nwidth" id="nwidth" />px<br />
                        Page width
                    </div>
                    <div class="col-p_20_4">
                        Cantidad de columnas<br />
                        <input type="text" name="ncol" id="ncol" /><br />
                        Number of columns
                    </div>
                    <div class="col-p_20_4">
                        Distancia entre columnas<br />
                        <input type="text" name="swcol" id="swcol" />px<br />
                        Distance between columns
                    </div>
                    <div class="col-p_20_4 last">
                        <input type="submit" value="Crear" />
                        <input type='hidden' value='yes' name='calc' />
                    </div>
                </form>                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p></p>
                <hr />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $y = 1;
                $nwidth = $_GET['nwidth'];
                $ncol = $_GET['ncol'];
                $swcol = $_GET['swcol'];
                $xcol = $ncol - $y;
                $cnt = 100;
                $spc = ($swcol * $cnt) / $nwidth;
                if (isset($_GET['nwidth']) && !empty($_GET['nwidth'])) {
                    if ($_GET['calc'] == "yes") {
                        echo "<h3>/* Copy and paste this code into your css styles - Copiar este código y pega en tus estilos de css */</h3>\n";
                        echo "<i>/* Start - Inicio */</i><br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo ".container{float:left; width:100%; margin:0px; padding:0px;}<br>\n";
                        echo ".row{float:left; max-width:" . $nwidth . "px; margin:0px auto; padding:0px;}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "<h3>/* Nested column layout - Diseño de columna anidada */</h3>\n";
                        echo "/*--------------------------------*/<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            if ($x == $ncol)
                                continue;
                            $style.= ".col-n_" . $swcol . "_" . $x . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; margin-right:" . $spc . "%;}<br>\n";


                        for ($x = 1, $i = $xcol; $x <= $ncol; $x++, $i--) {
                            $xc = ($nwidth - ($xcol * $swcol)) / $ncol;
                            $zx = (($xc * $x) + ($swcol * ($x - $y))) / $ncol;

                            #if ($x == $ncol)
                            #continue;

                            echo ".col-n_" . $swcol . "_" . ($x) . "{width:" . $zx . "%;}<br>\n";
                        }
                        echo ".col-n_" . $swcol . "_$ncol{float:left;}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "<h3>/* Parallel column layout - Diseño de columna paralela */</h3>\n";
                        echo "/*--------------------------------*/<br>\n";

                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            if ($x == $ncol)
                                continue;
                            $style.= ".col-p_" . $swcol . "_" . ($x + $y) . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; margin-right:" . $spc . "%;}<br>\n";

                        echo ".col-p_" . $swcol . "_$y{float:left;}<br>\n";

                        for ($x = 1, $i = $xcol; $x <= $ncol; $x++, $i--) {

                            $sx = (($nwidth - (($x - $y) * $swcol)) / $x) / $ncol;

                            echo ".col-p_" . $swcol . "_" . $x . "{width:" . $sx . "%;}<br>\n";
                        }
                        echo "/*----------------last layout----------------*/<br>\n";
                        echo ".last{margin-right: 0px !important;}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "/*----------------Responsive----------------*/<br>\n";
                        echo "@media handheld, only screen and (max-width: 767px) {<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            $style.= ".col-n_" . $swcol . "_" . $x . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; width:100%; margin:0px; padding:0px}<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            $style.= ".col-p_" . $swcol . "_" . $x . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; width:100%; margin:0px; padding:0px;}<br>\n";
                        echo "}<br>\n";

                        echo "/*--------------------------------*/<br>\n";
                        echo "<i>/* End - Fin */</i><br><br>\n";
                    }
                }
                ?> 
            </div>
        </div>        
    </body>
</html>
