<?php require 'db.php';
if (isset ($_POST['btnmk']) ) {
  $name = $_POST['name'];
  $regno = $_POST['regno'];
  $class = $_POST['class'];
  $phone = $_POST['phone'];

  $sql = 'INSERT INTO cp(name, reg_no, class, phone) VALUES(:name, :regno, :class, :phone)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':regno' => $regno, ':class' => $class, ':phone' => $phone])) {
    header("location:cps.php");
  }
}
?>