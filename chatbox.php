
<?php
session_start();
$_SESSION['last_line'] = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
  
  var source, chattext, last_data, chat_btn, conx_btn, disconx_btn, text;
var hr = new XMLHttpRequest();
function connect(){
    if(window.EventSource){
        source = new EventSource("server.php");
        source.addEventListener("message", function(event){
            if(event.data != last_data && event.data != ""){
                chattext.innerHTML += event.data+"<hr>";
            }
            last_data = event.data;
        });
        chat_btn.disabled = false;
        conx_btn.disabled = true;
        disconx_btn.disabled = false;
    } else {
        alert("event source does not work in this browser, author a fallback technology");
        // Program Ajax Polling version here or another fallback technology like flash
    }
}
function disconnect(){
    source.close();
    disconx_btn.disabled = true;
    conx_btn.disabled = false;
    chat_btn.disabled = true;
}
function chatPost(){
    chat_btn.disabled = true;
    hr.open("POST", "chat_intake.php", true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            chat_btn.disabled = false;
            text.value = "";
        }
    }
    hr.send("text="+text.value);
}
var promptValue = prompt('Enter your name:', '');
if(promptValue != null){
	hr.open("POST", "chat_intake.php", true);
	hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    if(hr.responseText == "success"){
				chattext = document.getElementById("chattext");
				chat_btn = document.getElementById("chat_btn");
				conx_btn = document.getElementById("conx_btn");
				disconx_btn = document.getElementById("disconx_btn");
				text = document.getElementById("text");
				conx_btn.disabled = false;
				alert("Welcome to the chat "+promptValue+", press connect when ready.");
			}
	    }
    }
	hr.send("uname="+promptValue);
}
  
  
  </script>
  <script>
function myFunction() {
    alert("Your message has been Submited successfully");
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    
  </head>
  <style>
div#chatbox{
    width: 600px;
    height: 375px;
    padding: 10px;
    background:black;
    border-radius: 1px;
	color:black;
}
div#chatbox > #chattext{
    height: 200px;
    padding: 10px;
    background: #FFF;
    margin: 10px 0px;
    overflow-y: auto;
	color: black;
}
div#chatbox > #text{
	color:black;
	width: 100%;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | DR</title>
	
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
                    <a class="navbar-brand" href="index.html"><img src="images/main_logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                       
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

	
	<section id="contact-page">
        <div class="container">
		<div class="col-sm-1">
	</div>
	<br>
	<br>
	<div class="col-sm-5">
            <div class="left">     
<br>
<br>
<br>
<br>
<br>
<br>			
                <h2>One to one vedio chat</h2>
                <p>Click the button below</p>
            </div> 
			<a href=" https://stephenlb.github.io/webrtc-sdk/" class="btn btn-danger" role="button" >open vedio chat</a>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                   
                                
                </div>
            </div><!--/.row-->
       
	   
	   </div>
	   <br>
	   <div class="col-sm-5">
	    <div class="row contact-wrap"> 
		<div id="chatbox">
  <b><h3 style="color:white">AgriDr Chatbox </h3><h4 style="color:white">Ask us </h4></b>
  <div id="chattext"></div>
  <textarea id="text"></textarea></div>
  
  <button type="button" id="chat_btn" onclick="chatPost()" value="Submit Text" disabled class="btn btn-danger btn-lg" required="required">Submit</button>
   &nbsp; &nbsp; &nbsp; &nbsp;
   
     <button type="button" id="conx_btn" onclick="connect()" value="Connect" disabled class="btn btn-primary btn-lg" required="required">Connect</button>&nbsp; &nbsp; &nbsp; &nbsp;
  
  
   <button  type="button" id="disconx_btn" onclick="disconnect()" value="Disconnect" disabled class="btn btn-danger btn-lg" required="required">Disconnect</button> &nbsp; &nbsp; &nbsp; &nbsp;
   
  

		</div><!--/.container-->
    	</div>
		</div>
		
	
	</section><!--/#contact-page-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
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
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
	
	
	
	
	
	
	
	
	
	