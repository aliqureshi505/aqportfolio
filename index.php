<?php include("header.php"); ?>

<html>
<head>

	<title></title>
		<?php include("design.css"); ?>
</head>
<body>


	<div class="jumbotron " id="main-jumbo"> 
		
		


		<div class="container">
			


				<!-- STARTING MAIN NAVBAR-->

     <div class="container">
			<nav class="navbar  navbar-fixed-top ">
  			<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" style="color:#00FFFF" href="#">AQ-PortFolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">  <i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
        <li><a href="#myprojects"> <i class="fa fa-tasks" aria-hidden="true"></i> My Projects</a></li>
        <li><a href="#aboutdev"> <i class="fa fa-info-circle" aria-hidden="true"></i>  About Me</a></li> 
        <li><a href="#loc"> <i class="fa fa-location-arrow" aria-hidden="true"></i>  Contact Me</a></li> 

      </ul>
     
    </div>
  </div>
 </nav>
 </div>
		<!-- ENDING MAIN NAVBAR-->

 <br><br>


			<center class="w3-animate-top">  
				<br>
				<h2 id="welcome"> <img class="w3-spin"  src="img/spinner1.png" height="40px">  Welcome To Portfolio </h2>
				<hr style="border:1px solid white; width:60%;">
			 </center>

			
			 <center class="w3-animate-zoom">
			<p id="para"> 
				
				Rich experience simply means better design and development.<br>
				Lets have a look on my projects 
				
			</p>

					<div id="jumbo-btn">	
						
						<button class="w3-button w3-hover-white w3-hover-text-deep-orange ">
						 <i class="fa fa-bolt" aria-hidden="true"></i> Explore Project</button>

			</center>	
			



			<center>   <hr style="border:1px solid orange; width:60%"> </center>
			
			<center>

				<div id="under_btn" class="w3-animate-bottom">
				<button class="btn"><i class="fa fa-address-card-o" aria-hidden="true"></i> Login Forms</button>

				<button class="btn"> <i class="fa fa-list-alt" aria-hidden="true"></i> Web Projects</button>

				<button class="btn"> <i class="fa fa-gg" aria-hidden="true"></i> GUI Designs</button>
				</div>

				<h3 class="w3-animate-bottom" style="color:white; margin-top:20px;"> 
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					Every expert once was a begineer
					<i class="fa fa-quote-right" aria-hidden="true"></i>
				 </h3>
			</center>


		</div>


	  </div>


	  <?php  include("dev.php"); ?>

<div id="myprojects">
<center> 

   <h2 style="font-weight:bold; color:#FF5722; margin-top:30px;"> <img src="img/projects5.png" height="60px">   My Projects</h2>  </center>
</div>


 <hr class="star-primary">





		
    <section id="portfolio">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                               	 <i class="fa fa-eye fa-3x"></i>
                                <h3>Image Gallery</h3>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                                <h3>E-Shopping Website</h3>
                            </div>
                        </div>
                        <img src="img/portfolio/shoppingweb.jpg" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
                                <h3>Login | Signup Forms</h3>
                            </div>
                        </div>
                        <img src="img/portfolio/loginform2.jpg" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                                <h3>Book Management System</h3>
                            </div>
                        </div>
                        <img src="img/portfolio/book managementsys.jpg" class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <i class="fa fa-question-circle fa-3x"></i>
                                <h3>Online Quiz System</h3>
                            </div>
                        </div>
                        <img src="img/portfolio/quiz.jpg" class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <i class="fa fa-file-image-o fa-3x"></i>
                                <h3>Image Gallery </h3>
                            </div>
                        </div>
                        <img src="img/portfolio/imagegallery1.jpg" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </div>
        </div>
    </section>













<div id="why_to_choose" class="jumbotron ">

<center><h2> <i style="font-size:40px;" class="fa fa-lightbulb-o" aria-hidden="true"></i> &nbsp; Why to Choose Me ?</h2></center>
<center>   <hr style="border:1px solid #00BCD4; width:30%">  </center>


<div class="container">
<center>

<p>
I am highly skilled with HTML, CSS, Javascript, PHP, Wordpresss and manymore. I have over one years of experience as web developer, and I am eager to learn even more technologies to sharpen my skillset. 
You will never regret upon my work I can handle tasks in efficient manner
</p>
<br>
<button class="btn btn-primary"  >  <i class="fa fa-gratipay fa-1x" aria-hidden="true"></i>  Hire me as freelancer</button>

<br><br>




</center>
</div>
</div>


	<?php include('clients.php'); ?>

   <div id="follow-us" >

	<center> <h2 style="font-weight:bold; color:aqua;"> Follow Me On Social Media.</h2>

		<center>   <hr style="border:1px solid aqua; width:50%">  </center>
		

	<div class="col-md-12 ">
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
				<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>
				<a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>

	</div>
					<center>  <br> <br>  <br>  <hr style="border:1px solid aqua; width:50%">  </center>			
	</center> 
   </div>





<?php include("team.php"); ?>

<br>









<div class="container-fluid" id="loc">

<br>
<br>
	
		<div class="col-md-6">
		 <center>	<h3 style="color:white;" > <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;  Contact Us    </h3>   <div style="border:1px solid aqua; width:50%"></div> </center>
		 <br>
			<form > 
				<div class="col-md-offset-1 col-md-5">
				<input type="text" style="border-radius:0px;" placeholder="Enter Name" class="form-control ">
			    </div>
				
			    <div class="col-md-offset-1  col-md-5">
				<input type="text" style="border-radius:0px;" placeholder="Enter Email" class=" form-control">
				</div>

				<br><br>
				<div class="col-md-offset-1  col-md-11">
				<textarea placeholder="Enter Your Message Here" rows="10" class="form-control"></textarea> <br>
				<center> <button id="leavemsg" class="btn btn-active btn-lg" style="border-radius:0px;">Leave Message</button> </center>
			    </div>


			</form>
		</div>	
	



			<div class="col-md-6">
				<center><h3 style="color:white;"> <i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; Our Location.</h3>  <div style="border:1px solid aqua; width:50%"></div> </center>
				<br>
				
				<div>
				<iframe style=" width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.216756197849!2d71.51392431461336!3d30.20236038182518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3429b4ea2783%3A0x3409b3c51279f380!2sMadni+Chowk!5e0!3m2!1sen!2s!4v1489920357843"  height="268" frameborder="0"  allowfullscreen></iframe>
				</div>


				<div id="dev-contact" class="col-md-offset-2">
					<br>
					<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;  Phone No: 0312-1600686 <br>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Email: aliqureshi.info@gmail.com

				</div>
<br> <br>
			</div>














	


	<script type="text/javascript" src="files/bootstrap_Files/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="files/bootstrap_Files/jquery.js"></script>
</body>
</html>