<?php session_start(); ?>
<?php if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>
<?php 
  // for get id perticuler row
  $id = $_GET['id'];
    include_once("includes/config.php");

	  $result = mysqli_query($conn, "DELETE FROM `users` WHERE id=$id");
      if(!isset($_POST['delete'])) {
          //  echo not working
           echo "<script type='text/javascript'>alert('Deleted successfully');</script>"; 
            header("Location:admindashboard.php");
      }else{
           echo "<script type='text/javascript'>alert('Something Wrong');</script>";
      }



?>