 <?php  
require '../../conexion.php';
 if(isset($_POST['factura'])){
    $factura = $_POST['factura'];
    $id = $_POST['id'];
    $costo = $_POST['costo'];
   
   $sqlup = "UPDATE hist_comodo
    SET  			
    num_factura = '$factura',
    monto = '$costo'
     where  id= '$id'";
    $resultup = mysqli_query($conexion, $sqlup);

    if($resultup){
        echo "Actualizado";
    }else{ echo "No actualizado"; }

   

 

 }


?> 