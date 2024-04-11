<?php  include 'connect.php';
if(isset($_POST['update'])){
  $take_id = $_POST['data_id'];
  $name = $_POST['name'];
  $com_name = $_POST['com_name'];
  $department = $_POST['department'];
  $title = $_POST['title'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $comments = $_POST['comments']; 
$sql =  "UPDATE `client_table` SET name='$name',
company_name='$com_name',department='$department',`title`='$title',address='$address', email='$email',
contact='$contact',city='$city',state='$state',zip='$zip',comments='$comments' where id='$take_id'";
  $update_query = mysqli_query($conn , $sql);
  if($update_query){
    header('location:display.php');
  }else{
    header('location:display.php');
  }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client details form</title>
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
</style>
</head>
<body>
<div class="form-body">
    <header class="header text-center m-0 p-3 w-100%">
        <h1>UPDATE YOUR DETAILS</h1>
    </header>
    <?php
if(isset($_GET['edit'])){
    $get_id = $_GET['edit'];
    $get_data = mysqli_query($conn , "select * from `client_table` where id=$get_id");
    $num_row = mysqli_num_rows($get_data);
    if($num_row>0){
    $row = mysqli_fetch_assoc($get_data);
 ?> 
    <section class="container my-3  p-4">
<form method="post" class="row g-3">
<input type="hidden" name="data_id" value="<?php echo $row['id'] ?>">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Client Name</label>
    <input type="text" class="form-control border border-white" id="inputEmail4" name="name" required value="<?php echo $row['name'] ?>">
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Company Name</label>
    <input type="text" class="form-control border border-white" id="inputPassword4" value="<?php echo $row['company_name'] ?>" required name="com_name">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Department</label>
    <input type="text" class="form-control border border-white" id="inputAddress" value="<?php echo $row['department'] ?>" required name="department">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Title</label>
    <input type="text" class="form-control border border-white" id="inputAddress" value="<?php echo $row['title'] ?>" required name="title">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control border border-white" id="inputAddress" value="<?php echo $row['address'] ?>" required name="address">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" class="form-control border border-white" id="inputAddress2" value="<?php echo $row['email'] ?>" required name="email">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Contact</label>
    <input type="tel" class="form-control border border-white" id="inputAddress"  required name="contact" value="<?php echo $row['contact'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control border border-white" id="inputCity" value="<?php echo $row['city'] ?>" required name="city">
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label ">State</label>
    <select id="inputState" class="form-select border border-white" name="state">
      <option><?php echo $row['state'] ?></option>
      <option>Delhi</option>
      <option>Bihar</option>
      <option>Uttarakhand</option>
      <option>Uttar pradesh</option>
      <option>punjab</option>
      <option>Himachal pradesh</option>
      <option>Haryana</option>
      <option>Madhyapradesh</option>
      <option>kashmir</option>
      <option>jharkhand</option>
      <option>kerala</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control border border-white" id="inputZip" required name="zip" value="<?php echo $row['zip'] ?>">
  </div>
 
  <div class="col-12">
  <label for="comment">Comments</label>
  <textarea class="form-control border border-white" id="comment" placeholder="Comment goes here" name="comments"><?php echo $row['comments'] ?>
  </textarea>
  </div>

  <div class="col-1">
    <button type="submit" class="btn btn-primary" name="update" >Update</button>
  </div>

</form>
</section>

</div>
</div>
<?php
}};
?>
</body>
</html>