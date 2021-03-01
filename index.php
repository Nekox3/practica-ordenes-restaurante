<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
        <meta charset="UTF-8">
        <title>Comida de restaurante</title>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/font-awesome.css" rel="stylesheet"/>
        <link href="css/custom.css" rel="stylesheet"
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
<center><div class="text text-primary"><h1><b>Bienvenido al restaurante de php g4</b></h1></div></center>
<th>
     <center><h2><font color="blue">menú</font></h2></center>
</head>
<body class="alert alert-warning">
    <form>       
    <center>

        <table>
             <td>
                 <img src="hamburguesa.jpg" width="400" height="300">
                    <center> <p style="b"><h3>Hamburguesa a $2.00 </h3></p>
                    <select name="p1" id="p1" class="alert alert-info btn btn-block">
                     <option value="1">No</option>
                     <option value="2">Si</option>
            </select> 
                     </center>
    
    </td>
              </td> 
               <td> 
                   <img src="pollo.jpg" width="400" height="300"/><br>
                    <center>   <p color="white"><h3> Plato de pollo con papas a $3.00 </h3></p>
                       
                     <select name="p2" id="p2" class="alert alert-info btn btn-block">
                    
                     <option value="1">No</option>
                     <option value="2">Si</option>
                </select>
    </td> 
                    </center>
              
               
        <td> 
            <img src="lomito.jpg" width="400" height="300" />
        <center><p style="b"><h3> Lomito a $5.00 </h3></p>
        <select name="p3" id="p3" class="alert alert-info btn btn-block">
                     <option value="1">No</option>
                     <option value="2">Si</option>
            </select> 
     </center>
        </td>
        </table>
                            </center>
            
            
        <center> <p style="b"><h3>ingrese la cantidad de platos que desea</h3></p>
            <input type="number" name="p" required></center>
                
            <center>
             <tr>
                 <fielset>
                     <input type="radio"  name="d" id="d" value="1" required>Aplica descuento
                     <input type="radio" name="d" id="d" value="2" required>No aplica descuento
                 </fielset>
             </tr>
        </center>
    <center>   
    <tr>
    <select name="p4" id="p4" class="alert alert-info">
        <option value="0">Elija el descuento</option>
                     <option value="1">---10%---</option>
                     <option value="2">---20%---</option>
                     <option value="3">---30%---</option>
                     <option value="4">---40%---</option>
                     <option value="5">---50%---</option>
            </select>
        </tr>
            
    
        </center>
    
    <center>
    <input type="submit" name="botom" id="botom"value="Registrar orden">    
    </center>
            <br>
            <br>
    <center>
        <?php
        $pla1=2.00;
        $pla2=3.00;
        $pla3=5.00;
        
        
         if(isset($_REQUEST["botom"]) && isset($_REQUEST["d"]) && isset($_REQUEST["p"])){
    /* ratio button*/ 
$d = $_REQUEST["d"];
/*es el platillo 1*/
$l1 = $_REQUEST["p1"];
/*es el platillo 2*/
$l2 = $_REQUEST["p2"];
/*es el platillo 3*/
$l3 = $_REQUEST["p3"];
/*numero plato*/
$p =  $_REQUEST["p"];
$p4 = $_REQUEST["p4"];
echo "<center>";
 echo "<table alert' border='2'><tr><td>";     
 echo "<center>";echo"-----------------------------------------ORDEN DE COMPRA----------------------------------------";
 echo"<br>";
 
 if ($l1 == "2"){
echo "<center>";            echo "Orden de ".$p." Hamburguesas ".$pla1." dolares";
                 echo "</td>";
            echo "</tr>";
 }else{
     $pla1=0;
 }
     
     if ($l2 == "2"){ 
    echo "<tr><td>";
echo "<center>";            echo "Orden de ".$p." Pollo con papas ".$pla2." dolares";
                 echo "</td>";
            echo "</tr>";
}else{
    $pla2=0;
}
    
    if ($l3 == "2"){ 
    echo "<tr><td>";
echo "<center>";            echo "Orden de ".$p." Lomito ".$pla3." dolares";
                 echo "</td>";
            echo "</tr>";
}else{
    $pla3=0;
}       

{
            $total=($pla1+$pla2+$pla3);
            
            $venta=$total*$p;
         }
            
 if ($d == 1){ 
    
     echo "<tr><td>";
 
     switch ($p4){
    case 0:
        echo "usted no ha seleccionado ningun descuento su total es $$venta";
        break;        
    case 1:
        echo " Total sin descuento ".$venta;
        echo " Su total con el 10% de descuento su total es $".($venta-$venta*0.10)." ";
        break;
    case 2:
        echo " Total sin descuento ".$venta;
        echo "Su total con el 20% de descuento su total es $".($venta-$venta*0.20)."  ";
            break;
    case 3:
        echo " Total sin descuento ".$venta;
        echo "Su total con el 30% de descuento su total es $".($venta-$venta*0.30)."  ";
            break;
    case 4:
        echo " Total sin descuento ".$venta;
        echo "Su total con el 40% de descuento su total es $".($venta-$venta*0.40)."  ";
            break;
    case 5:
        echo " Total sin descuento ".$venta;
        echo "Su total con el 50% de descuento su total es $".($venta-$venta*0.50)."  ";
            break;
        
        
 }} else {
     echo "<tr><td>";
          echo "<center>"; echo "-------------------Total de compra sin nungun descuento $".$venta."------------------------";     
            }
 echo "</td></tr></table>";    
   }
        echo"<br>";
        echo"<br>";
       
        ?>
            
    </center>
    </form>
</body>
</html>