<?php session_start() ?>

<?php 
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
    }
    
?>

<?php include 'includes/dashHeader.php'; ?>


<?php


    $id = $_GET['id'];
    include_once("includes/config.php");
    $query = "SELECT * FROM users WHERE id=".$id;
    $result = mysqli_query($conn, $query);
    $row =mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    // $password = $row['password'];




    // if(isset($_POST['update'])) {

    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
        
    //     // $update = "UPDATE users SET name='".$name."', email='".$email."' , username='".$username."', password='".$password."' WHERE id=".$id;
    //     $result = mysqli_query($conn, $update);
    //     if($result){
    //         header("Location: admindash.php"); 
    //     }
    //     else{

    //         echo "helo";


    //     }
           	

    // }

?>




  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php"></a></li>
          <li><a href="admindash.php">Admin Dashboard</a></li>
          <li>Dashboard View Details</li>
        </ol>
        <h2>Dashboard View Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section dashboard">
      <div class="container">
	  <div class="section-title">
          <h2>Dashboard View Details</h2>
         
        </div>
		<!-- <div class="row">
		
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
			<form action="#" method="post" role="form" class="flip-form">
              <div class="row">
                <div class="form-group col-md-3">
                  <select class="form-control" id="name" name="" required>
					<option value="" selected>--Select Sport--</option>
					<option value="1">Tennis</option>
					<option value="2">Cricket</option>
				  </select>
                </div>
                <div class="form-group col-md-3">
                  <select class="form-control" id="name" name="" required>
					<option value="" selected>--Select Distance Range--</option>
					<option value="1">1 KM</option>
					<option value="2">2 KM</option>
				  </select>
                </div>
				<div class="form-group col-md-3">
                  <select class="form-control" id="name" name="" required>
					<option value="" selected>--Select Skill Level--</option>
					<option value="1">Beginners</option>
					<option value="2">Intermediate</option>
				  </select>
                </div>
				<div class="form-group col-md-3">
                  <select class="form-control" id="name" name="" required>
					<option value="" selected>--Select Location--</option>
					<option value="1">Chandigarh</option>
					<option value="2">Mohali</option>
				  </select>
                </div>
              </div>
            </form>
		  </div> -->
          <!-- <form name="form" method="post" action="#">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <table class="table table-bordered">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>  -->
				  <!-- <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Update</th> 
				  
				</tr>
			  </thead> -->
              <!--  -->



              <!-- <tr>
				  <th><input type="text" name="name" value="<?php echo $name;?>"></th>
				  <th> <input type="text" name="email" value="<?php echo $email;?>"></th>
                  <th> <input type="text" name="username" value="<?php echo $username;?>"></th>
                  <th> <input type="text" name="password" value="<?php echo $password;?>"></th>
                  <th><input type="submit" name="update" value="Update"></th>
				  
				  
				</tr> -->

<!-- View user body start-->

<div class="container">
  <main>
    <div class="py-5 text-center">
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <!-- <h2>View</h2> -->
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Sign In </span>
          <span class="badge bg-primary rounded-pill">Sign up</span>
        </h4> -->
       
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">user view</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input disabled type="text" class="form-control" id="firstName" placeholder="" name="name" value="<?php echo $name;?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input disabled type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <!-- <div class="invalid-feedback">
                Valid last name is required.
              </div> -->
            </div>

            <!-- <div class="col-12">
              <label for="password" class="form-label">Password <span class="text-muted">(Required)</span></label>
              <input type="password" class="form-control" id="password" placeholder="User@4321s">
              <div class="invalid-feedback">
                Please enter a Strong Password .
              </div>
            </div> -->

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input disabled  type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username;?>" required>
              <!-- <div class="invalid-feedback">
                  Your username is required.
                </div> -->
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input disabled  type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $email;?>">
              <!-- <div class="invalid-feedback">
                Please enter a valid email .
              </div> -->
            </div>

            <!-- <div class="col-12">
              <label for="password" class="form-label">Password <span class="text-muted">(Required)</span></label>
              <input disabled  type="password" class="form-control" id="password" placeholder="User@4321s">
              <div class="invalid-feedback">
                Please enter a Strong Password .
              </div>
            </div> -->

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input disabled  type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input disabled  type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select disabled  class="form-select" id="country" required>
                <option>India</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select disabled  class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option >Chandigarh</option>
                <option>Haryana</option>
                <option>Punjab</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input  disabled type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <div class="col-md-5">
              <label for="country" class="form-label">Phone No.<span class="text-muted"></span></label>
              <input disabled  type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Please select a valid number.
              </div>
            </div>

          <!-- <hr class="my-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="mb-3">Gender</h4>
        </h4> -->

          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div> -->

          <!-- <hr class="my-4"> -->



                <!-- view user body end -->
              
              <!-- </table> -->
          </div>
            </form> 
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'includes/footer.php'; ?>