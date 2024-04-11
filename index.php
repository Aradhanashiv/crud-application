<?php  include 'connect.php';

//query to insert data into database;

if(isset($_POST['submit'])){
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

  $sql = "insert into `client_table` (name, company_name, department,title,	address, email, contact, city,	state, zip, comments) 
  values ('$name' ,'$com_name', '$department', '$title', '$address' , '$email', '$contact', '$city' , '$state', '$zip' , '$comments') ";
  $result = mysqli_query($conn , $sql); 
  if($result){
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
        <h1>CLIENT DETAILS FORM</h1>
    </header>
    <!-- <div class="form-border w-70"> -->
    <section class="container my-3  p-4">
<form method="post" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Client Name</label>
    <input type="text" class="form-control border border-white" id="inputEmail4" placeholder="enter your name" name="name" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Company Name</label>
    <input type="text" class="form-control border border-white" id="inputPassword4" placeholder="XYZ company" required name="com_name">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Department</label>
    <input type="text" class="form-control border border-white" id="inputAddress" placeholder="HR" required name="department">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Title</label>
    <input type="text" class="form-control border border-white" id="inputAddress" placeholder="" required name="title">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control border border-white" id="inputAddress" placeholder="" required name="address">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" class="form-control border border-white" id="inputAddress2" placeholder="email id..." required name="email">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Contact</label>
    <input type="tel" class="form-control border border-white" id="inputAddress"  required name="contact">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control border border-white" id="inputCity" placeholder="your city name...." required name="city">
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label ">State</label>
    <select id="inputState" class="form-select border border-white" name="state">
      <option selected>choose....</option>
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
    <input type="text" class="form-control border border-white" id="inputZip" required name="zip">
  </div>
 
  <div class="col-12">
  <label for="comment">Comments</label>
  <textarea class="form-control border border-white" id="comment" placeholder="Comment goes here" name="comments">
  </textarea>
</div>
  <div class="col-1">
    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  </div>
  <div class="col-2">
    <button type="submit" class="btn btn-primary bg-warning border-0" name="data" ><a class="link-light text-decoration-none" href="display.php">View Data</a></button>
  </div>
</form>
</section>
</div>
</div>
</body>
</html>