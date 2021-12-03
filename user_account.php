<?php session_start() ?>

<?php 
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
    }
    
?>




<?php include 'includes/header.php'; ?>


<?php

    // user account
    $id = $_SESSION['user_id'];
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
/* Start Image Upload Code */
// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['SUBMIT'])) {

    $filename = $_FILES["filename"]["name"];

    $tempname = $_FILES["filename"]["tmp_name"];  

        $folder = "profilepic/".$filename;   
     
    $conn = mysqli_connect("localhost", "user", "password", "flippappx"); 

        

    $update="UPDATE users SET profile_pic='$filename' WHERE id=$id";
		$result=mysqli_query($conn,$update);

        if (move_uploaded_file($tempname, $folder)) {

           echo $msg = "Image uploaded successfully";

        }else{

          echo $msg = "Failed to upload image";
    }
}												
    /* End Image Upload Code */
?>








<!--  user profile tab  start style-->
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>



<!--  user profile tab  end style-->





  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="dashboard.php">User Dashboard</a></li> -->
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
	

<!-- View user body start-->

<div class="container">
  <main>
    <div class=" text-center">
      <!-- <img class="d-block mx-auto mb-4" src="assets/images/person.svg" alt="" width="72" height="57"> -->
      <!-- <h2>Profile</h2> -->
    </div>

    <h2>My Account</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'MyAccount')" id="defaultOpen">My Account</button>
  <button class="tablinks" onclick="openCity(event, 'Password')">Password</button>
  <button class="tablinks" onclick="openCity(event, 'Profile')">Profile picture</button>
  
  
</div>

<div id="MyAccount" class="tabcontent">

  <!-- My Account TAB End -->
  <table>
  <tr >
    <!-- <th style="width:25%;">Name</th>
    <th style="width:40%;">Country</th> -->
  </tr>
  <tr>
    <td class="table.td">Name</td>
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
  <tr>
		<th scope="row"> profile pic</th>
				<td> <img src="profilepic/<?php echo $row['profile_pic'];?>" width="150" height="70"></td>
  </tr>
  
</table>
</div>


<!-- My Account TAB End -->

<div id="Password" class="tabcontent">
<form name="form" method="post" action="#">  	
        <table border="0">   	
              <tr>
                        <!-- <tr>     	
                            <td>Current Password</td> 
                            <?php if ($password == $password){ ?>
                            <td><input style="width: 100%;" type="password" name="password" value="<?php  $password;?>"></td>   	
                            <?php }else { echo "<script>alert('current password not match')</script>";?>
                              <?php } ?>
                        </tr> -->
                        
                              
                        <tr>     	
                            <td>New Password</td>    	
                            <td><input style="width: 100%;" type="password" name="password" value="<?php  $password;?>"></td>   	
                        </tr> 

                        <tr>     	
                            <td>Confirm Password</td>    	
                            <td><input  style="width: 100%;" type="password" name="password" value="<?php $password;?>"></td>   	
                        </tr>   
                       
                        <tr>    	
                              	
                            <td><input type="submit" name="update" value="Update"></td>   	
                        </tr>
               </tr>  
              
                 
                    	</table> 	
                    </form>

  <!-- <h3>Paris</h3>
  <p>Paris is the capital of France.</p>  -->
</div>
<!--  Profile Picture tab start -->




<div id="Profile" class="tabcontent">

<div class="row">
          <div class="col-lg-3 d-flex align-items-stretch"></div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="" role="form" enctype="multipart/form-data" class="flip-form">
              <div class="row">
                <div class="form-group">
                  <label for="filename">Image</label>
                  <input type="file" class="form-control" name="filename" value="" required>
                </div>               
              </div>    
					<div class="text-center"><button type="SUBMIT" name="SUBMIT">UPLOAD</button></div>			  
            </form>			
          </div>
		   <div class="col-lg-3 d-flex align-items-stretch"></div>
        </div>
  </div>
   

      <!-- <div class="text-center"> -->
      <!-- <img class="d-block mx-auto mb-3" src="assets/images/person.svg" alt="" width="20%" height="20%"> -->
        


       
       
       
       <!-- <label  for="formFileLg" class="form-label">Upload Your Profile</label> -->
       <!-- <input class="form-control form-control-sm" id="formFileLg" type="file" /> -->
       <!-- <a style="margin-top: 30px;" href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true">upload </a>  -->
<!-- </div> -->

<!--  Profile Picture End start -->

<!--  tab start for user profile -->

<!-- script for user profile tab -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<!-- script for user profile tab -->





<!-- 
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">

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
           
            </div>

        
            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input disabled  type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username;?>" required>
            
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input disabled  type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $email;?>">
          
            </div>

        

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

 
        </div>
      </div>
    </section> -->

 
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr{
border-bottom: 1px solid #ddd;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
td {
  font-size:20px; 
  color:black;

}

</style>
</head>
<body>

<!-- <h2>Zebra Striped Table</h2> -->
<!-- <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->


<!-- <table class="center">
  <tr > -->
    <!-- <th style="width:25%;">Name</th>
    <th style="width:40%;">Country</th> -->
  <!-- </tr>
  <tr>
    <td class="table.td">First Name</td>
    <td ><?php echo $name;?></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>S</td>
  </tr>
  <tr>
    <td>Username</td>
    <td><?php echo $username;?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $email;?></td>
  </tr> -->
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
  <!-- <h1></h1>
</table> -->

  </main><!-- End #main -->

  <?php include 'includes/adminpanel_footer.php'; ?>