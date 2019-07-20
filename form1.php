

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
    <p class="lead">Hello <?php echo $_SESSION['username']; ?>.Below is a form submitted by you. You can click the 'Edit' button to edit your entries or click 'Submit' to submit and logout.</p>
  </div>

  <div class="row">
    
    <div class="col-md-12 order-md-1">
     
        
 <?php
$email= $_SESSION['email'];
$username= $_SESSION['username'];

$sql = "SELECT * FROM surveydata WHERE email='$email'";

$retval = mysqli_query($conn, $sql);

if (mysqli_num_rows($retval) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($retval)) {

                echo " <strong> Email ID                : </strong>{$row['email']} <br><br>";
                echo " <strong> Name                    : </strong>{$username} <br><br>";
                echo " <strong> Father's Name           : </strong>{$row['father']} <br><br>";
                echo " <strong> Course                  : </strong>{$row['course']} <br><br>";
                echo " <strong> Semester                : </strong>{$row['sem']} <br><br>";
                echo " <strong> Address 1               : </strong>{$row['address1']} <br><br>";
                echo " <strong> Address 2               : </strong>{$row['address2']} <br><br>";
                echo " <strong> Country                 : </strong>{$row['country']} <br><br>";
                echo " <strong> State                   : </strong>{$row['state']} <br><br>";
                echo " <strong> Zip                     : </strong>{$row['zip']} <br><br>";
                echo " <strong> Mobile Number           : </strong>{$row['mobile']} <br><br>";
                echo " <strong> Father's Mobile Number  : </strong>{$row['fmobile']} <br><br>";
                echo " <strong> Father's Email ID       : </strong>{$row['femail']} <br><br>";
                echo " <strong> CGPA                    : </strong>{$row['cgpa']} <br><br>";
                echo " <strong> 12th Percentage         : </strong>{$row['per']} <br><br>";
       }
} else {
        header('Location: survey.php');
}

mysqli_close($conn);
?>


        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href = 'survey1.php';">EDIT</button>
        <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href = 'logout.php';">SUBMIT</button>
     
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 JIIT, NOIDA</p>
  </footer>
</div>
</body>
</html>

