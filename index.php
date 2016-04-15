<?php
include "connect.php";


  $sql = "SELECT * FROM myguest";
  $result = $conn->query($sql);

 ?>

 <table border="1" width="100%">
   <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Action</th>
     </tr>
     <?php if ($result) {?>
       <?php while ($row = $result->fetch_assoc()) {?>
     <tr>
       <td><?php echo $row['id']; ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['email'] ?></td>
       <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>

       </tr>
       <?php  }  ?>
       <?php  }else {?>
         <p>Data is not avilable!</p>
       <?php  }  ?>
 </table>

 <a href="create.php">Create User</a>
