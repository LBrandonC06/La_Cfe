<?php

include("db.php");

if(isset($_GET['Id_Local'])) {
  $Id_Local = $_GET['Id_Local'];
  $query = "DELETE FROM Sucursales WHERE Id_Local = $Id_Local";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida.");
  }

  $_SESSION['message'] = 'Borrado con Exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>