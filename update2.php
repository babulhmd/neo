<?php
include "connect.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $
  if ($name == '' || $email =='') {
    echo "Field must not be empty.";
  }else {
    $sql = "UPDATE myguest
    SET
    name = '$name'
    email = '$email'
    WHERE 'id' = '$id'";
  $g = $conn->query($sql);
  }
}
if (isset($g)) {
echo "updated succe";
}

 ?>
