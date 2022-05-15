<?php require 'db.php';
if (isset ($_POST['btnmk']) ) {
  $location = $_POST['loc'];
  $sql = 'INSERT INTO location(loc) VALUES(:location)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':location' => $location])) {
    header("location:locations.php");
  }
}
?>