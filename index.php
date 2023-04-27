<html>
  <head>
    <title>PHP Test</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <center>
    <font face="monospace" SIZE=10>
    <?php
$dia = date("D");
switch ($dia) {
    case 'Sun':
           echo "Hoy es domingo";
    break;
    case 'Mon':
           echo "Hoy es lunes";
    break;
    case 'Tue':
           echo  "Hoy es martes";
    break;
    case 'Wed':
           echo "Hoy es miércoles";
    break;
    case 'Thu':
           echo "Hoy es jueves";
    break;
    case 'Fri':
           echo "Hoy es viernes";
    break;
    case 'Sat':
           echo "Hoy es sábado";
    break;
  default:
  echo 'Entre lunes y domingo:'.$dia;
}  
?> 
    </font>
  </center>
  </body>
  <img src="calendario.jpg">
</html>