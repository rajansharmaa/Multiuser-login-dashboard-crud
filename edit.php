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
    $password = $row['password'];




    if(isset($_POST['update'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $update = "UPDATE users SET name='".$name."', email='".$email."' , username='".$username."', password='".$password."' WHERE id=".$id;
        $result = mysqli_query($conn, $update);
        if($result){
            header("Location: admindashboard.php"); 
        }
        else{

            echo "helo";


        }
           	

    }

?>




  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="admindashboard.php">Admin Dashboard</a></li>
          <li>Dashboard Edit Details</li>
        </ol>
        <h2>Dashboard Edit Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section dashboard">
      <div class="container">
	  <div class="section-title">
          <h2>Dashboard Edit Details</h2>
         
        </div>
		<div class="row">
		  <form name="form" method="post" action="#">
            <table class="table table-bordered">



      <div class="container">
        <main>
          <div class="py-5 text-center">
            <!-- <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h2>Eiew User Form</h2>
          </div>

          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Account Name : <?php echo "$name"; ?> </span>
              </h4>
            
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">User Account</h4>
              <form class="needs-validation" novalidate>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" name="name" value="<?php echo $name;?>" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>

            <!-- <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div> -->

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
                <input  type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username;?>" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $email;?>">
              <div class="invalid-feedback">
                Please enter a valid email .
              </div>
            </div>

            <!-- <div class="col-12">
              <label for="password" class="form-label">Password <span class="text-muted">(Required)</span></label>
              <input disabled  type="password" class="form-control" id="password" placeholder="User@4321s">
              <div class="invalid-feedback">
                Please enter a Strong Password .
              </div>
            </div> -->

            <!-- <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div> -->

            <!-- <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div> -->

            <!-- <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option>India</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div> -->

            <!-- <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option >Chandigarh</option>
                <option>Haryana</option>
                <option>Punjab</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div> -->

            <!-- <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input  type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div> -->
          </div>

          <!-- <div class="col-md-5">
              <label for="country" class="form-label">Phone No.<span class="text-muted"></span></label>
              <input  type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Please select a valid number.
              </div>
            </div> -->

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

          <hr class="my-4">  
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="update" value="Update">Update Now</button>    


        <!--  EDit users details  -->

<!--  -->
               </table>
          </div>
            </form>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'includes/footer.php'; ?>