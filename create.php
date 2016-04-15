<?php
include "connect.php";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  if ($name == '' || $email =='') {
    echo "Field must not be empty.";
  }else {
    $sql = "INSERT INTO myguest(name, email) VALUES('$name', '$email')";
    $result = $conn->query($sql);
  }
}




if (isset($result)) {
  echo "New Data inserted";
}
 ?>
<form class="" action="" method="post">


 <table border="1">
   <tr>
     <td>Name</td>
     <td><input type="text" name="name" value=""></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value=""></td>
  </tr>
  <tr>
    <td></td>
    <td>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Cancel">
    </td>
  </tr>

 </table>
</form>
 <a href="create.php">Create User</a>
