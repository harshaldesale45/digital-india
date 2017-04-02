
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table{
     border: 1px solid black;
	padding: 10px
	
}
 .td1 
 {  
    padding-top: 5px;
    padding-right: 40px;
    padding-bottom: 5px;
    padding-left: 40px;
	 border: 1px solid black;
	
	
 }

.tdRed{
color:black;
padding-top: 5px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-left: 5px;
	 border: 1px solid black;
	
}
.tdgreen
{
	color:red;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DR</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  02233835860</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/main_logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                       
                        <li><a href="vedio.html"> Webinar</a></li>
                        <li><a href="donation.html">Donation</a></li>
                        <li><a href="calander.html">Manage Task</a></li>
                        <li><a href="homere.html">Home Remedies </a> </li> 
                        <li><a href="chatbox.php">Counsulting</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="about-us">
        <div class="container">
		<div class="sm-col-sm-3">
</div>	
<div class="sm-col-sm-6">

<div class="container-fluid">
			<div class="center wow fadeInDown">


				<h2>List of the Hospital</h2>
				
			</div>
	
	
<h2>Select: </h2>
  <form action="hossort.php" method="post" class="form-inline">
    
		<div class="form-group">
      <label for="name" class="text-danger">CITY:</label>
      <input type="text" name="city"  maxlength='50' class="form-control"  id="city" placeholder="Nerul, Vashi" required >
    </div>
	&nbsp &nbsp
	
		<div class="form-group">
      <label for="name" class="text-danger">Rating:</label>
      <input type="text" name="rating"  maxlength='50' class="form-control"  id="rating" placeholder="Out of 5" required>
    </div>
	&nbsp &nbsp
	<button type='submit' name='submit' value="submit" class="btn btn-danger">Submit</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<a href="https://agridoctor.000webhostapp.com/storagezone.html" class="btn btn-danger">Locate</button></a>
	</form>
	<br>
	
	
		
	
  <?php
  $host = "localhost";
$user = "id1182415_local";
$password = "harshal";
$db = "id1182415_1234";

$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hospital";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo"<table class=td1>
   <thead class=tdgreen>
      <tr >
       <th class=td1>ID</th>
       <th class=td1>Hospital</th>
	    <th class=td1>City</th>
        <th class=td1>Address</th>
		 <th class=td1>Doctors Available</th>
			 <th class=td1>Contact Number</th>
			 <th class=td1>Rating</th>
			 
			  <th class=td1>Photos</th>
 </tr>
    </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo"<tbody>";
      echo "<tr>
        <td  class='tdRed'>".$row["id"]."</td>
       <td class='tdRed'>".$row["hospital_name"]."</td>
	   <td class='tdRed'>".$row["city"]."</td>
	   <td class='tdRed'>".$row["address"]."</td>
	     <td class='tdRed'>".$row["no"]."</td>
	   <td class='tdRed'>".$row["contactno"]."</td>
	   <td class='tdRed'>".$row["rating"]."</td>
	    <td class='tdRed'>"."<img align=top width=200px src=".$row["photo"]."></td>";
	 
	   
				
		
    echo "</tr>";
      
	  
    echo"</tbody>";
       
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
	
	
	</div>
	

	</div>
	</section>
	
	
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">BitCamp 2017</a> team BigOh.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
