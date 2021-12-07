<!--  dashboard only for users they can't edit the credentials of users  -->
<?php 
    session_start();  
  
?>


<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  // $createdby = $_REQUEST['username'];
  // $createdby = $_POST['createdby'];
    $createdby = $_SESSION['username']; 
    $createdfor = $_POST['createdfor'];
   
   

  $query = "INSERT INTO blog(title, description, createdby,createdfor) VALUES ('$title', '$description', '$createdby','$createdfor')";
  $result = mysqli_query($conn, $query);

  //  msg cobfirmation
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  // msg confirmation 
  header('Location: ../admindashboard.php');

}

?>
