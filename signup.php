<?php include 'includes/header.php'; ?>


<?php 

include 'includes/config.php';

error_reporting(0);

session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
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




  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Signup Page</li>
        </ol>
        <h2>Signup Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section">
      <div class="container">
        <div class="section-title">
          <h2>User Sign Up</h2>
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

					<div class="text-center"><button type="submit" name="submit" value="submit" class="btn btn-success" 	autocomplete="off">Signup</button></div>

		</div>
			</form><br><br>

		<!--  js validation -->
	</div>
		<div class="col-lg-2 d-flex align-items-stretch">
          </div>
        </div>
		<div class="row">
			<div class="text-center">
				<p>If have an account? <a href="signin.php">SIGNIN</a></p>
			</div>
		</div>
      </div>


	  
    </section>

 </main><!-- End #main -->


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


<?php include 'includes/footer.php'; 