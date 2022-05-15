<?php require 'db.php';
if (isset ($_POST['btnmk']) ) {
  $cpname = $_POST['cpname'];
  $location = $_POST['location'];
  $item = $_POST['item'];
  $Tin = $_POST['Tin'];
  $Tout = $_POST['Tout'];

  $sql = 'INSERT INTO records(cp, loc, item, time_in, time_out) VALUES(:cpname, :location, :item, :tin, :tout)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':cpname' => $cpname, ':location' => $location, ':item' => $item, ':tin' => $Tin, ':tout' => $Tout])) {
    header("location:records.php");
  }
}
?>