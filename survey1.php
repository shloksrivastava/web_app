

<?php
session_start();
include("connectdb.php");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    destroy_session();
}
$success="Survey Successful.Thank You";
$error="Error";

if(!isset($_SESSION['email'])){
	header('Location: index.php');
}

if(isset($_POST['father'])){
	$email=$_SESSION['email'];
	$father = $_POST['father']; 
        $course = $_POST['course'];
        $sem = $_POST['sem'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$country = $_POST['country'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$mobile=$_POST['mobile'];
	$fmobile=$_POST['fmobile'];
	$femail=$_POST['femail'];
	$cgpa=$_POST['cgpa'];
	$per=$_POST['per'];

	
	$sql = "UPDATE surveydata SET 'email'='$email', 'father'='$father', 'course'='$course', 'sem'='$sem', 'address1'='$address1', 'address2'='$address2', 'country'='$country', 'state'='$state', 'zip'='$zip', 'mobile'='$mobile', 'fmobile'='$fmobile', 'femail'='$femail', 'cgpa'='$cgpa', 'per'='$per')";

	if (mysqli_query($conn, $sql)) {
	    echo "<script type='text/javascript'>alert('$success');</script>";
header('Location: form1.php');
	}
	else {
    	echo "<script type='text/javascript'>alert('$error');</script>";
	
	}
mysqli_close($conn);
//header('Location: index.php');
}

?>




<!doctype html>
<html lang="en">
 <head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/images/s2.png" alt="" width="72" height="72">
    <h2>JAYPEE INSTITUTE OF INFORMATION TECHNOLOGY, NOIDA</h2>
    <p class="lead">Hello <?php echo $_SESSION['username']; ?>.Below is a form previously submitted by you. You can click on EDIT to edit your entries or can logout <a href="logout.php">here</a>.</p>
  </div>

  <div class="row">
    
    <div class="col-md-12 order-md-1">

      <form class="needs-validation" method="post" novalidate>
        

        <div class="mb-3">
          <label for="father">Father's Name</label>
          <input type="text" class="form-control" id="father" name="father" placeholder="Father's Name">
        </div>

        <div class="mb-3">
          <label for="course">Course Name</label>
          <input type="text" class="form-control" id="course" name="course" placeholder="Course Name">
        </div>

        <div class="mb-3">
          <label for="sem">Semester</label>
          <input type="text" class="form-control" id="sem" name="sem" placeholder="Semester">
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input name="address1" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 </label>
          <input name="address2" type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              	<option value="India">India</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
	      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
	      <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Goa">Goa</option>
              <option value="Gujrat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerela">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Pondicherry">Pondicherry</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <div class="mb-3">
          <label for="mobile">Mobile Number</label>
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
        </div>

        <div class="mb-3">
          <label for="fmobile">Father's Mobile Number</label>
          <input type="text" class="form-control" id="fmobile" name="fmobile" placeholder="Father's Mobile Number">
        </div>

        <div class="mb-3">
          <label for="femail">Father's Email</label>
          <input type="text" class="form-control" id="femail" name="femail" placeholder="Father's Email">
        </div>

        <div class="mb-3">
          <label for="cgpa">CGPA</label>
          <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="CGPA">
        </div>

        <div class="mb-3">
          <label for="per">12 PERCENTAGE</label>
          <input type="text" class="form-control" id="per" name="per" placeholder="PERCENTAGE">
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

       </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 JIIT, NOIDA</p>
  </footer>
</div>
</body>
</html>

