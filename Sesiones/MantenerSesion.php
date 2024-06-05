<?php
function mantenerSesion(){
     session_start();
     if(!isset($_SESSION['usuario'])){
         echo '
             <script>
                 alert("Por favor, debes iniciar sesión");
                 window.location = "../Login/Prueba.php";
             </script>  ';        
 
         session_destroy();
         die();
     }else{
        return $_SESSION['usuario'];
     }
    }    
?>
