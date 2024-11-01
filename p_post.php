<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
error_reporting(0);
$_nama = $_POST['nama'];
$_umur = $_POST['umur'];
$_gender = $_POST['gender'];
$_pendidikan = $_POST['pendidikan'];
?>

<table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_nama; ?></td>
      <td><?php echo $_umur; ?></td>
      <td><?php echo $_gender; ?></td>
      <td><?php echo $_pendidikan; ?></td>
      <td><?php 
        if (isset($_POST['hobi0'])) {
            echo $_POST['hobi0'] . " | ";}
        if (isset($_POST['hobi1'])) {
            echo $_POST['hobi1'] . " | ";}
        if (isset($_POST['hobi2'])) {
            echo $_POST['hobi2'] . " | ";}
        if (isset($_POST['hobi3'])) {
            echo $_POST['hobi3'] . " | ";}
        if (isset($_POST['hobi4'])) {
            echo $_POST['hobi4'] . " | ";}
        if (isset($_POST['hobi5'])) {
            echo $_POST['hobi5'] . " | ";}
         ?></td>
      
    </tr>
    <tr>
      <td colspan="5"><button><a href="index.php">Kembali</a></button></td>
    </tr>
  </tbody>
</table>

<br><br>
