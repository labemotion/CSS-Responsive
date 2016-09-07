<!DOCTYPE HTML>
<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>LabeMotion - Column Layout - CSS Generator code</title>
        <style>
            html, body{width: 100%; margin: 0 auto; padding: 0; vertical-align: baseline;}
            form{width: 100%;}            
            label{font-weight: bold; color: #4f80bc;}
            span{color:#225072;}
            /* Start - Inicio */
            /*--------clear: both; max-width: 1200px; margin: 0 auto;------------------------*/
            .container{display: block; clear: both; width: 100%; min-height: 10px; margin: 0 auto; padding: 0; position:relative; left:0px}              
            .row {clear: both; max-width: 1200px; margin: 0 auto;}
            /*--------------------------------*/
            /* Nested column layout - Diseño de columna anidada */
            /*--------------------------------*/
            .diferentes-20_1, .diferentes-20_2, .diferentes-20_3, .diferentes-20_4, .diferentes-20_5, .diferentes-20_6, .diferentes-20_7, .diferentes-20_8, .diferentes-20_9, .diferentes-20_10, .diferentes-20_11 {float:left; margin-right:1.6666666666667%; margin-bottom: 20px;}
            .diferentes-20_1{width:6.8055555555556%;}
            .diferentes-20_2{width:15.277777777778%;}
            .diferentes-20_3{width:23.75%;}
            .diferentes-20_4{width:32.222222222222%;}
            .diferentes-20_5{width:40.694444444444%;}
            .diferentes-20_6{width:49.166666666667%;}
            .diferentes-20_7{width:57.638888888889%;}
            .diferentes-20_8{width:66.111111111111%;}
            .diferentes-20_9{width:74.583333333333%;}
            .diferentes-20_10{width:83.055555555556%;}
            .diferentes-20_11{width:91.527777777778%;}
            .diferentes-20_12{width:100%;}
            .diferentes-20_12{float:left;}
            /*--------------------------------*/
            /* Twin column layout - Diseño de columna gemela */
            /*--------------------------------*/
            .iguales-20_2, .iguales-20_3, .iguales-20_4, .iguales-20_5, .iguales-20_6, .iguales-20_7, .iguales-20_8, .iguales-20_9, .iguales-20_10, .iguales-20_11, .iguales-20_12 {float:left; margin-right:1.6666666666667%; margin-bottom: 20px;}
            .iguales-20_1{float:left;}
            .iguales-20_1{width:100%;}
            .iguales-20_2{width:49.166666666667%;}
            .iguales-20_3{width:32.222222222222%;}
            .iguales-20_4{width:23.75%;}
            .iguales-20_5{width:18.666666666667%;}
            .iguales-20_6{width:15.277777777778%;}
            .iguales-20_7{width:12.857142857143%;}
            .iguales-20_8{width:11.041666666667%;}
            .iguales-20_9{width:9.6296296296296%;}
            .iguales-20_10{width:8.5%;}
            .iguales-20_11{width:7.5757575757576%;}
            .iguales-20_12{width:6.8055555555556%;}
            /*----------------last layout----------------*/            
            .col_full{float:left; width: 100%; margin: 0;}  
            .last{margin-right: 0px !important;}           
            .clear, .clearboth {clear:both !important; width: 100%;}
            .clearleft {clear:left !important;}
            .clearright {clear:right !important;}

            .textcenter {text-align:center;}
            .textright {text-align:right;}
            .textleft {text-align:left;} 
            .textjustify {text-align:justify;}
            /*--------------------------------*/
            /*----------------Responsive----------------*/
            @media handheld, only screen and (max-width: 767px) {
                .diferentes-20_1, .diferentes-20_2, .diferentes-20_3, .diferentes-20_4, .diferentes-20_5, .diferentes-20_6, .diferentes-20_7, .diferentes-20_8, .diferentes-20_9, .diferentes-20_10, .diferentes-20_11, .diferentes-20_12 {float:left; width:100%; margin:0px; padding:0px}
                .iguales-20_1, .iguales-20_2, .iguales-20_3, .iguales-20_4, .iguales-20_5, .iguales-20_6, .iguales-20_7, .iguales-20_8, .iguales-20_9, .iguales-20_10, .iguales-20_11, .iguales-20_12 {float:left; width:100%; margin:0px; padding:0px;}
            }
            /*--------------------------------*/
            /* End - Fin */

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>        

    </head>
    <body>
        <div class="container">
            <div class="row">                
                <h2>LabeMotion - Column or grid Layout - CSS Generator code</h2>
                <h4>Make your responsive layout</h4>                
                <div class="clear"></div>                
                <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
                    <div class="col_full"><h3>Prefijo de la clase / Prefix class.</h3></div>
                    <div class="iguales-20_3">                            
                        <label>Columnas o re anidadas:</label><br />
                        <input type="text" name="prefN" id="prefN" /><br />
                        <span>Nested column/grid.</span> 
                    </div>
                    <div class="iguales-20_3">
                        <label>Columnas paralelas:</label><br />
                        <input type="text" name="prefP" id="prefP" /><br />
                        <span>Twin column/grid.</span>
                    </div>
                    <div class="iguales-20_3 last">
                        <label>Espaci inferior:</label><br />
                        <input type="text" name="Btspace" id="Btspace" /><br />
                        <span>Bottom space.</span>
                    </div>
                    <div class="clear"></div>
                    <div class="iguales-20_4">
                        <label>Ancho de pagina:</label><br />
                        <input type="text" name="nwidth" id="nwidth" />px<br />
                        <span>Page width.</span>
                    </div>
                    <div class="iguales-20_4">
                        <label>Cantidad de columnas:</label><br />
                        <input type="text" name="ncol" id="ncol" /><br />
                        <span>Number of columns.</span>
                    </div>
                    <div class="iguales-20_4">
                        <label>Distancia entre columnas:</label><br />
                        <input type="text" name="swcol" id="swcol" />px<br />
                        <span>Distance between columns.</span>
                    </div>
                    <div class="iguales-20_4 last"><br/>
                        <input type="submit" value="Crear" />
                        <input type='hidden' value='yes' name='calc' />
                    </div>
                </form>                 
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2>Vea su codigo debajo - See below the code</h2>
                <hr />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $y = 1;
                $prefN = $_GET['prefN'];
                $prefP = $_GET['prefP'];
                $Btspace = $_GET['Btspace'];
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
                        echo ".container{display: block; clear: both; width: 100%; min-height: 10px; margin: 0 auto; padding: 0; position:relative; left:0px}<br>\n";
                        echo ".row{clear:both; max-width:" . $nwidth . "px; margin:0px auto; padding:0px;}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "<h3>/* Nested column layout - Diseño de columna anidada */</h3>\n";
                        echo "/*--------------------------------*/<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            if ($x == $ncol)
                                continue;
                            $style.= "." . $prefN . "-" . $swcol . "_" . $x . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; position:relative; margin-right:" . $spc . "%; margin-bottom:" . $Btspace . ";}<br>\n";
                        for ($x = 1, $i = $xcol; $x <= $ncol; $x++, $i--) {
                            $xc = ($nwidth - ($xcol * $swcol)) / $ncol;
                            $zx = (($xc * $x) + ($swcol * ($x - $y))) / $ncol;
                            #if ($x == $ncol)
                            #continue;
                            echo "." . $prefN . "-" . $swcol . "_" . ($x) . "{width:" . $zx . "%;}<br>\n";
                        }
                        echo "." . $prefN . "-" . $swcol . "_$ncol{float:left;}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "<h3>/* Twin column layout - Diseño de columna gemela */</h3>\n";
                        echo "/*--------------------------------*/<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            if ($x == $ncol)
                                continue;
                            $style.= "." . $prefP . "-" . $swcol . "_" . ($x + $y) . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; position: relative; margin-right:" . $spc . "%; margin-bottom:" . $Btspace . ";}<br>\n";
                        echo "." . $prefP . "-" . $swcol . "_$y{float:left;}<br>\n";
                        for ($x = 1, $i = $xcol; $x <= $ncol; $x++, $i--) {
                            $sx = (($nwidth - (($x - $y) * $swcol)) / $x) / $ncol;
                            echo "." . $prefP . "-" . $swcol . "_" . $x . "{width:" . $sx . "%;}<br>\n";
                        }
                        echo "/*----------------last layout----------------*/<br>\n";
                        echo ".last{float:right !important; margin-right: 0px !important;}<br>\n";
                        echo ".clear{clear: both; float: left; width: 100%}<br>\n";
                        echo "/*--------------------------------*/<br>\n";
                        echo "/*----------------Responsive----------------*/<br>\n";
                        echo "@media handheld, only screen and (max-width: 767px) {<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            $style.= "." . $prefN . "-" . $swcol . "_" . $x . ", ";
                        }
                        $style = trim($style, ", ");
                        echo $style;
                        echo " {float:left; position: relative; width:100%; margin:0px; padding:0px}<br>\n";
                        $style = "";
                        for ($x = 1; $x <= $ncol; $x++) {
                            $style.= "." . $prefP . "-" . $swcol . "_" . $x . ", ";
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
