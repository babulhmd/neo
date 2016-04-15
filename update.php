<?php
include "connect.php";
if (isset($_GET['id']) and !empty($_GET['id'])) {
  $id =$_GET['id'];
  $sql = "SELECT * FROM `myguest` WHERE `id`= $id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

}

// print_r($result);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];

  if ($name == '' || $email =='') {
    echo "Field must not be empty.";
  }else {
    $sql = "UPDATE myguest
    SET
    name = $name
    email = $email
    WHERE id = $id";
  $g = $conn->query($sql);
  }
}
if (isset($g)) {
echo "updated succe";
}

 ?>

<form class="" action="update.php?id=<?php echo $id ?>" method="post">


 <table border="1">
   <tr>

     <td>Name</td>
     <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="<?php echo $row['email'] ?>"></td>
  </tr>
  <tr>
    <td></td>
    <td>
<input type="submit" name="submit" value="Update">
<input type="reset" name="reset" value="Cancel">
    </td>
  </tr>

 </table>
</form>
 <a href="create.php">Create User</a>
