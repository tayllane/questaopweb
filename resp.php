<?php
   session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['telefone'] = $_POST['telefone'];
        echo "<a href='resp2.php'>olhe seus dados</a>";
  
?>