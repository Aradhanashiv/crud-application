<?php  include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
       body{
        background-color: rgb(253, 164, 173);
       }

       h1{
        background-color: rgb(255, 10, 104);
       }
       th,td{
    border: 1px solid grey;
    padding: 10px;
       }
    </style>
</head>
<body>
     <h1 class= "text-center mb-5 p-4 w-100% text-white" >CLIENTS DATA TABLE</h1>
<table class="table table-danger table-striped mx-auto border border-success" style="width: 95%;">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">company_Name</th>
      <th scope="col">Department</th>
      <th scope="col">Title</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Comments</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php
$get_data = mysqli_query($conn , "select * from `client_table`");
$num_rows = mysqli_num_rows($get_data);
$num = 1;
if($num_rows > 0){
        while($row = mysqli_fetch_assoc($get_data)){
            ?>

            <tbody>
            <tr>
            <td><?php echo $num ?></td>
              <th scope="row"><?php echo $row['name'] ?></th>
              <td><?php echo $row['company_name'] ?></td>
              <td><?php echo $row['department'] ?></td>
              <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['contact'] ?></td>
              <td><?php echo $row['city'] ?></td>
              <td><?php echo $row['state'] ?></td>
              <td><?php echo $row['zip'] ?></td>
              <td><?php echo $row['comments'] ?></td>
              <td><a href="update.php?edit=<?php echo $row['id'] ?>" onclick="">Edit</a></td>
              <td><a href="delete.php?delete=<?php echo $row['id'] ?>">Delete</a></td>
              
            </tr>
          </tbody>

          <?php
                $num++;}
             }
           ?>
 
</table>
</body>
</html>