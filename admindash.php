<!--  admin panel dashboard  -->
<!-- view all users with edit the credentials -->


<?php 
  include 'includes/config.php';
    session_start();

	$rle = $_SESSION['role'];
	if(!$rle =="admin"){

	}



      if (!isset($_SESSION['username'])) {
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
          <li><a href="#">Home</a></li>
          <li>Admin Dashboard Page</li>
        </ol>
        <h2>Admin Dashboard Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page form-section dashboard">
      <div class="container">
	  <div class="section-title">
          <h2>Admin Panel Users List</h2>
         
        </div>
		<div class="row">
		
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
		  </div>
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <table class="table table-bordered">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Username</th>
				  <th scope="col">Role</th>
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
            

            
            
        echo "<td><a href=\"view.php?id=$row[id]\">View</a> | <a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }?>
			</table>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

          <!-- UserList dashboard Footer -->

<?php include 'includes/dashFooter.php'; ?>