<?php

include('db.php');

if (isset($_POST['saveSucursales'])) {
  $Municipio = $_POST['Municipio'];
  $Colonia = $_POST['Colonia'];
  $Avenida = $_POST['Avenida'];
  $Numero = $_POST['Numero'];
  $Nombre_Sucursal = $_POST['Nombre_Sucursal'];
  $Contacto = $_POST['Contacto'];
  $Horario = $_POST['Horario'];
  $query = "INSERT INTO Sucursales(Municipio, Colonia, Avenida, Numero, Nombre_Sucursal, Contacto, Horario) VALUES ('$Municipio', '$Colonia', '$Avenida', '$Numero', '$Nombre_Sucursal', '$Contacto', '$Horario')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>