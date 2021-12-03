<?php include 'includes/adminpanel_header.php'; ?>
<?php 

include 'includes/config.php';

session_start();

error_reporting(0);
?>

<?php
if (isset($_SESSION['username'])) {
    header("Location: admindash.php");
}
?>


<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
	$email = $_POST['email'];
  $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: admindash.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}



?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Admin Signin Panel</li>
        </ol>
        <h2>Admin Signin Panel</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section">
      <div class="container">
        <div class="section-title">
          <h2>Admin Panel Sign In</h2>
         
        </div>
		<div class="row">
          <div class="col-lg-3 d-flex align-items-stretch"></div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="flip-form">
              <div class="row">
                <div class="form-group">
                  <label for="name">Username/Email</label>
                  <input type="email" class="form-control" name="email" value="" required>
                </div>
                <div class="form-group">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">SignIn</button></div>
            </form>
			
          </div>
		   <div class="col-lg-3 d-flex align-items-stretch"></div>
        </div>
		<div class="row">
			<div class="text-center">
				<p>Don't have an account? <a href="adminpanel_signup.php">SIGNUP</a></p>
			</div>
		</div>
      </div>
    </section>

  </main><!-- End #main -->
<?php include 'includes/adminpanel_footer.php'; ?>