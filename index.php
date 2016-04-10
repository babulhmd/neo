<?php
include "connect.php";
// require the Faker autoloader
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
// for ($i=0; $i < 10 ; $i++) {
//   echo $faker->name;
//   echo "<br>";
//   echo $faker->email;
//   echo "<br>";
// }
// $sql = "";
// for ($i=0; $i < 10 ; $i++) {
//   $sql .= "INSERT into myguest (firstname, email) values (\"$faker->name\", \"$faker->email\");";
//
// }
//
// if ($conn->multi_query($sql) === TRUE) {
//   // echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }



 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Starter Template</title>

     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
   <body>

     <nav class="navbar navbar-default">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#index.html">Bootstrap</a>
         </div>
         <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
             <li><a href="index.html">Home</a></li>
             <li class="active"><a href="#">Table</a></li>
             <li><a href="form.html">Form</a></li>
           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </nav>

     <div class="container">

       <h2>Basic Table</h2>


       <table class="table" border="1">
         <thead>
           <tr>
             <th>ID</th>
             <th>First Name</th>
             <th>Email</th>

           </tr>
         </thead>
         <tbody>
           <?php
           $sql = "SELECT * FROM `myguest`";

           $result = $conn->query($sql);

          //  echo "We have " . $result->num_rows . " rows in DB <br>";

           if($result->num_rows > 0){

             while ($row = $result->fetch_assoc()){
                     echo "<td>" . $row['id']. "</td>";
                      echo "<td>" . $row["firstname"]."</td>";
                      echo "<td>" . $row["email"]."</td>";

                      echo "</tr>";

             }
           }
            ?>

         </tbody>
       </table>

     </div><!-- /.container -->


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
