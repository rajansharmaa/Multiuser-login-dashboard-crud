<!--  admin panel dashboard  -->
<!-- view all users with edit the credentials -->
<?php session_start() ?>

<?php 
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
    }
    
?>


<php 

    

?>




<?php

    // user account
    $id = $_SESSION['admin_id'];
    include_once("includes/config.php");
    $query = "SELECT * FROM users WHERE id=".$id;
    $result = mysqli_query($conn, $query);
    $row =mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $password = $row['password'];


    if(isset($_POST['update'])) {
      $password = $_POST['password'];
      
      $update = "UPDATE users SET email='".$email."',username='".$username."',password='".$password."' WHERE id=".$id;
      $result = mysqli_query($conn, $update);
      if($result){
          header("Location: user_account.php"); 
      }
      else{


      }
           

  }
?>

<?php 
  include 'includes/config.php';
    // session_start();
	$rle = $_SESSION['role'] ?? "";
	if(!$rle =="admin"){

	}if (!isset($_SESSION['username'])) {
          header("Location: index.php");
     }
?>

<!--  End  php -->

<!-- for UserList dashboard Header -->
<?php include 'includes/dashHeader.php'; ?>






<!--  Start Body  -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Admin Dashboard Page</li>
        </ol>
        <h2>Admin Dashboard Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section dashboard">
      <div class="container">
	  <div class="section-title">
          <h2>Admin Panel</h2>
         
        </div>
		<div class="row">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="userlist-tab" data-bs-toggle="tab" data-bs-target="#userlist" type="button" role="tab" aria-controls="userlist" aria-selected="false">User List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Add New User</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bloguser-tab" data-bs-toggle="tab" data-bs-target="#bloguser" type="button" role="tab" aria-controls="bloguser" aria-selected="false">Blog User</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="newblog-tab" data-bs-toggle="tab" data-bs-target="#newblog" type="button" role="tab" aria-controls="newblog" aria-selected="false">Add New Blog User</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">

        <!--  tab for My Account  -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <style>
              table {
                border-collapse: collapse;
                width: 50%;
              } th, td {
                font-weight: bold;
                text-align: left;
                padding: 10px;
              } 
              

            </style>

            <table>
                <tr >
                    <!-- <th style="width:25%;">Name</th>
                    <th style="width:40%;">Country</th> -->
                </tr>
                <tr>
                    <td >Name</td>
                    <td ><?php echo $name;?></td>
                </tr>
                <!-- <tr>
                    <td>Last Name</td>
                    <td>S</td>
                </tr> -->
                <tr>
                    <td>Username</td>
                    <td><?php echo $username;?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email;?></td>
                </tr>
                <!-- <tr>
                    <td>Phone No.</td>
                    <td><?php echo $phone;?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $address;?></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><?php echo $country;?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?php echo $state;?></td>
                </tr>
                <tr>
                    <td>Zip</td>
                    <td><?php echo $zip;?></td>
                </tr> -->
                <!-- <tr>
                        <td > profile pic</td>
                        <td> <img src="profilepic/<?php echo $row['profile_pic'];?>" width="50" height="50"></td>
                </tr> -->
  
            </table>
                
        
            </div>
<!--  end my account -->

            <!-- tab for user list  -->
            <div class="tab-pane fade" id="userlist" role="tabpanel" aria-labelledby="userlist-tab">
                
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <table class="table table-bordered">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Username</th>
				  <th scope="col">Role</th>
          <th scope="col">Current Status</th>
          <th scope="col">Action Status</th>
				  <th scope="col">View | Edit | Delete</th>
				</tr>
			  </thead>

			  <!-- php -->

				<?php
        include_once("includes/config.php");
        
       $sql = "SELECT * FROM `users` WHERE role='user'";
       $result= mysqli_query($conn,$sql) or die(" query die");
        // echo "<h1>working" . $_SESSION['username']. "<h1>";
        // $row = mysqli_fetch_all($result);
        // print_r($row);
        
        while($row = mysqli_fetch_assoc($result)) {	
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
			      echo "<td>".$row['name']. "</td>";
			      echo "<td>".$row['email']. "</td>";
            echo "<td>".$row['username']. "</td>";
			      echo "<td>".$row['role']. "</td>";
            // show current status
            if($row['status']=="1"){
            echo "<td>Active</td>";
            }else {echo "<td>inactive</td>";}
            //  activate deactivated user
            if($row['status']=="1") {
              echo "<td><a href=deactivate.php?id=".$row['id']." class='btn red'>Deactivate</a></td>";
            }else{
              echo "<td><a href=activate.php?id=".$row['id']." class='btn green'>Activate</a></td>";
            }
            

            
            
       echo "<td><a href=\"view.php?id=$row[id]\">View</a> | <a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }?>
       
			</table>
          </div>
                
            
            </div>
            <!-- end user  -->



    <!-- tab for add new user -->
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

            <?php 

               include 'includes/config.php';

                    error_reporting(0);

                    session_start();

                        // check variable is set/declare or empty
                        if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                            $email = $_POST['email'];
                        $username = $_POST['username'];
                            $password = $_POST['password'];
                            $cpassword = $_POST['cpassword'];
                            $role = $_POST['role'];

                            if ($password == $cpassword) {
                                $sql = "SELECT * FROM users WHERE email='$email'";
                                $result = mysqli_query($conn, $sql);
                                // return the number of rows in result set
                                if (!$result->num_rows > 0) { 
                                    $sql = "INSERT INTO users (name, email, username, password, role)
                                            VALUES ('$name', '$email', '$username', '$password', '$role')";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo "<script>alert('Wow! User Registration Completed.')</script>";
                                        $name ="";
                                        $email = "";
                                        $username = "";
                                        $_POST['password'] = "";
                                        $_POST['cpassword'] = "";

                                        header("Location: admindashboard.php");
                                    } else {
                                        echo "<script>alert('Woops! Something Wrong Went.')</script>";
                                    }
                                } else {
                                    echo "<script>alert('Woops! Email Already Exists.')</script>";
                                }
                                
                            } else {
                                echo "<script>alert('Password Not Matched.')</script>";
                            }
                        }

                        ?>






    <section class="inner-page form-section">
      <div class="container">
        <div class="section-title">
          <h2>Add New User</h2>
        </div>
		<div class="row">
          <div class="col-lg-2 d-flex align-items-stretch"></div>

          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
		  <form action="#" onsubmit="return validation()" method="post"  class="flip-form">
		  <div >
		  		<div class="row">
					<div class="form-group col-md-6">
						<label class="font-weight-bold"> Name </label>
						<input type="text" name="name" class="form-control" id="Name" autocomplete="off">
						
					</div>

					<div class="form-group col-md-6">
						<label class="font-weight-bold"> Email: </label>
						<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
						
					</div>
				</div>

					<div class="form-group col-md-6">
						<label for="user" class="font-weight-bold"> Username: </label>
						<input type="text" name="username" class="form-control" id="user" autocomplete="off">
					
					</div>

					<div class="form-group">
						<label class="font-weight-bold"> Password: </label>
						<input type="text" name="password" class="form-control" id="pass" autocomplete="off">
						
					</div>

					<div class="form-group">
						<label class="font-weight-bold"> Confirm Password: </label>
						<input type="text" name="cpassword" class="form-control" id="conpass" autocomplete="off">
						
					</div>
					<input type="hidden" name="role" value="user">

					<div class="text-center"><button type="submit" name="submit" value="submit" class="btn btn-success" 	autocomplete="off">Add User</button></div>

		</div>
			</form><br><br>
	    </div>
		</div>
      </div>
</section>

 <!--  validation  -->
 <script type="text/javascript">
		

		function validation(){
			var character = /^[A-Za-z]+$/;
			var Name = document.getElementById('Name').value;
			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var cpassword = document.getElementById('conpass').value;
			
			var emails = document.getElementById('emails').value;

			//  for name 


		
			if(Name == ""){
				 alert(' Please fill the Name field');
				return false;
			}
			if(!isNaN(Name)){
			  alert(' Woops Charecter only!');
				return false;
			 }

			if((Name.length <= 5) || (Name.length >20 )){
				alert(' Name lenght must be between 5 and 20!');
				return false;
			}
			var character = /^[A-Za-z]+$/;
			if (Name.match(character))
				true;
			else {
			alert ("only alphabets are allowed");
				return false; 
			}



			// for email
			if(emails == ""){
				alert('Please fill the email idfield');
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				alert('@ Invalid Position');
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				alert('Invalid Position');
				return false;
			}




			// for username 
			if(user== ""){
				 alert(' Please fill the Username field');
				return false;
			}

			if((user.length <= 2) || (user.length > 20)) {
				alert('Username lenght must be between 2 and 20!'); 
				return false;	
			}
			if(!isNaN(user)){
				alert('Woops Charecter only!');
				return false;
			}


			// for password
			if(pass == ""){
				alert('Please fill the password field!');
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				alert('Passwords lenght must be between  5 and 20!');
				return false;	
			}


			if(pass!=cpassword){
				  alert('Password does not match the confirm password!');
				return false;
			}



			if(cpassword == ""){
				alert(' Please fill the  confirm password word field');
				return false;
			}
			}
</script>
</div>


             <!-- tab for blog list  -->
    <div class="tab-pane fade" id="bloguser" role="tabpanel" aria-labelledby="bloguser-tab">


    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created By</th>
            <th>Created at</th>
            <th>Created For user id</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM blog";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
             <td><?php echo $row['createdby'] ?></td> 
            <td><?php echo $row['created_at']; ?></td>
            <!-- TODO -->
            <td><?php echo $row['createdfor'] ?></td>
            <!--  -->
            <td>
              <a href="addblog/edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker">Edit</i>
              </a>
              <a href="addblog/delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt">Delete</i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
                

   
<!--  -->

              <!-- tab for add new blog user -->
    <div class="tab-pane fade" id="newblog" role="tabpanel" aria-labelledby="newblog-tab">


    <!-- add blog msg start -->

    <!-- add blog msg end -->


    <div class="card card-body">
        <form action="addblog/save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
             <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="hidden" name="createdby" value="createdby" >
          <input type="hidden" name="createdfor" value="createdfor">
          <!-- drop down start get user list -->
                 
              <select name="createdfor" class="form-select" aria-label="Default select example">
              <option selected value="" >Open this select menu</option>
              <option >all</option>

          <?php
                include_once("includes/config.php");
                            
                   $sql = "SELECT * FROM `users` WHERE role='user'";
                  
                    $result= mysqli_query($conn,$sql) or die(" query die"); 
              
                         while($row = mysqli_fetch_assoc($result)) {
                            
                          
                          //  echo " <option value='all'>" .$row['name']. "</option>";
                           echo " <option value='".$row['id']."'>" .$row['name']. "</option>";
         }?>

                </select>
            
          <!-- drop down end get user list -->
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">

        </form>
        
      </div>
 </div>



</div>
<!-- UserList dashboard Footer -->

<?php include 'includes/dashFooter.php'; ?>