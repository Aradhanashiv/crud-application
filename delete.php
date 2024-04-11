 <?php include 'connect.php';

if(isset($_GET['delete'])){
    $get_id = $_GET['delete'];

    $delete_query = "delete from `client_table` where id=$get_id";
    $result = mysqli_query($conn , $delete_query);
    if($result){
       header('location:display.php');
    }else{
        header('location:display.php');
    }
}


?>
