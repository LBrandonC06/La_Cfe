<?php
include("db.php");
$Nombre = '';
$Colonia= '';
$Avenida= '';
$Numero= '';
$Nombre_Sucursal= '';
$Contacto= '';
$Horario= '';

if  (isset($_GET['Id_Local'])) {
  $Id_Local = $_GET['Id_Local'];
  $query = "SELECT * FROM Sucursales WHERE Id_Local=$Id_Local";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Municipio = $row['Municipio'];
    $Colonia = $row['Colonia'];
    $Avenida = $row['Avenida'];
    $Numero = $row['Numero'];
    $Nombre_Sucursal = $row['Nombre_Sucursal'];
    $Contacto = $row['Contacto'];
    $Horario = $row['Horario'];
  }
}

if (isset($_POST['update'])) {
  $Id_Local = $_GET['Id_Local'];
  $Municipio= $_POST['Municipio'];
  $Colonia = $_POST['Colonia'];
  $Avenida = $_POST['Avenida'];
  $Numero = $_POST['Numero'];
  $Nombre_Sucursal = $_POST['Nombre_Sucursal'];
  $Contacto = $_POST['Contacto'];
  $Horario = $_POST['Horario'];

  $query = "UPDATE Sucursales set Municipio = '$Municipio', Colonia = '$Avenida', Avenida = '$Colonia', Numero = '$Numero', Nombre_Sucursal = '$Nombre_Sucursal', Contacto = '$Contacto', Horario = '$Horario' WHERE Id_Local=$Id_Local";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?Id_Local=<?php echo $_GET['Id_Local']; ?>" method="POST">
      <div class="form-group">
          <input name="Municipio" type="text" class="form-control" value="<?php echo $Municipio; ?>" placeholder="Municipio">
        </div>
        <div class="form-group">
        <input name="Colonia"  type="text" class="form-control" value="<?php echo $Colonia;?> " placeholder="Colonia">
        </div>
        <div class="form-group">
        <input name="Avenida"  type="text" class="form-control" value="<?php echo $Avenida;?>" placeholder=" Avenida">
        </div>
        <div class="form-group">
        <input name="Numero"  type="text" class="form-control" value="<?php echo $Numero;?>" placeholder="Numero">
        </div>
        <div class="form-group">
        <input name="Nombre_Sucursal"  type="text" class="form-control" value="<?php echo $Nombre_Sucursal;?>" placeholder="Nombre_Sucursal">
        </div>
        <div class="form-group">
          <input name="Contacto" type="text" class="form-control" value="<?php echo $Contacto; ?>" placeholder="Contacto">
        </div>
        <div class="form-group">
          <input name="Horario" type="text" class="form-control" value="<?php echo $Horario; ?>" placeholder="Horario">
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>