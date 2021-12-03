<?php include 'includes/adminpanel_header.php'; ?>


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
          <li>Admin Sign up</li>
        </ol>
        <h2>Admin Signup Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section">
      <div class="container">
        <div class="section-title">
          <h2>Admin Panel Sign Up</h2>
        </div>
		<div class="row">
          <div class="col-lg-2 d-flex align-items-stretch">
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="flip-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="name">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
                </div>
              <div class="form-group">
                <label for="name">Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
              </div>
              <div class="form-group">
                <label for="name">Confirm Password</label>
                <input type="text" class="form-control" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
              </div>

              <input type="hidden" name="role" value="admin">
              
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name='submit'>SignUp</button></div>
            </form>
          </div>
		<div class="col-lg-2 d-flex align-items-stretch">
          </div>
        </div>
		<div class="row">
			<div class="text-center">
				<p>If have an account? <a href="adminpanel_signin.php">SIGNIN</a></p>
			</div>
		</div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'includes/footer.php'; 