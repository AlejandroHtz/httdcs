<?php 

require ('../conexion.php');

		
				$sqlupids = "UPDATE users set users.password = PASSWORD('8yUK4pWX')
                WHERE email = 'egarcia@netsoft.com'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo "Atualizado <br>";
            }else{
                echo "No actualizado <br>";
            }




	
	
// }
