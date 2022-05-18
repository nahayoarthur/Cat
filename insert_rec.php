<?php require 'db.php';
if (isset ($_POST['btnmk']) ) {
  $regno = $_POST['regno'];
  $location = $_POST['location'];
  $item = $_POST['item'];
  $Tin = $_POST['Tin'];
  $Tout = $_POST['Tout'];
  $date = date('Y-m-d');
  $sql = 'INSERT INTO records(date,cp, loc, item, time_in, time_out) VALUES(:date,:regno, :location, :item, :tin, :tout)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':date'=>$date, ':regno' => $regno, ':location' => $location, ':item' => $item, ':tin' => $Tin, ':tout' => $Tout])) {
    header("location:records.php");
  }
}
?>