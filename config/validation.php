<?php 
    
    // Koneksi database
    include "connection.php";

    if(isset($_POST["operator"])){

    } elseif(isset($_POST["siswa"])){

    } else {
        header("Location: ../error/404");
        exit();
    }

?>