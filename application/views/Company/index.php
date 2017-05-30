<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meeting Room Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="icon" href="<?php echo base_url();?>assets2/img/meet.png">
  <script src="<?php echo base_url()?>assets2/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets2/js/bootstrap.min.js"></script>
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background-color: #fff;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	li.about{
		color: #f00;
	}
	h2.meetingRoom{
		position: absolute;
		color: green;
		
		left: 550px;
		
	}
	.navbar-header{
		background-color: #fff;
	}
	
	 .btn-primary{
		height:50px;
		widhth: 70px;
	}
	.btn-success{
		height:50px;
		widhth: 70px;
		background-color:#123123;
		border-color: #123123;
	}
	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }



li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #00f;
	color: white;
}
img.aci{
	position: absolute;
	left: 480px;
        top:10px;
}

.navbar-default{
    height: 80px;
}
.navbar-nav{
    position: absolute;
    top:10px;
    left:929px;
}
	
  </style>
</head>
<body>


<!--nav class="navbar navbar-inverse navbar-fixed-top">
<ul>
  
  <li><img src="assets/images/index.png" style="width:70%; align:center" ></li>
  <li><button type="button" class="btn btn-success">Home</button></li>
  <li><button type="button" class="btn btn-success">News</button></li>
  <li><button type="button" class="btn btn-success">Contact</button></li>
  <li><button type="button" class="btn btn-success">About</button></li>
  <li><button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Users/account")?>'"><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
  <li><button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("Welcome/hello");?>'">Link</button><li>

</ul>

</nav-->






<nav class="navbar navbar-default navbar-fixed-top">
  <!--div class="container-fluid"-->
    
    <!--div class="collapse navbar-collapse" id="myNavbar"--->
      <ul class="nav navbar-nav">
		
		<li><button type="button" class="btn btn-success">Home</button></li>
		<li><button type="button" class="btn btn-success">Contact</button></li>
		<li><button type="button" class="btn btn-success" onclick="window.location='<?php echo base_url();?>home/about'">About</button></li>
		<li><button type="button" class="btn btn-success" onclick="window.location='<?php echo base_url();?>authenticate'"><span class="glyphicon glyphicon-log-in"></span> User Login</button></li>
		<li><button type="button" class="btn btn-primary" onclick="window.location='<?php echo base_url();?>authenticate_1'">Admin Login</button><li>
		
      </ul>
	   <h2 class="meetingRoom"> Meeting Room Booking </h2>
      <img class="aci" src="<?php echo base_url()?>assets2/images/index.png" style="width:3.5%; align:center" >
    <!--/div-->
  <!--/div-->
</nav>


<div class="container">
    <br> <br> <br> <br>
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url()?>assets2/images/3.jpg" style="height:470px; width:1500px"  data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3>Meeting Site</h3>
        </div>
      </div>

      <div class="item">
         <img src="<?php echo base_url()?>assets2/meetingRoom/5.jpg" style="height:470px; width:1500px" data-color="firebrick" alt="Second Image">
         <div class="carousel-caption">
            <h3>Meeting Site</h3>
        </div>
      </div>
    
      <div class="item">
         <img src="<?php echo base_url()?>assets2/meetingRoom/4.jpg" style="height:470px; width:1500px"  data-color="firebrick" alt="Second Image">
         <div class="carousel-caption">
            <h3>Meeting Site</h3>
        </div>
      </div>
        
      <div class="item">
         <img src="<?php echo base_url()?>assets2/meetingRoom/3.jpg" style="height:470px; width:1500px"  data-color="firebrick" alt="Second Image">
         <div class="carousel-caption">
            <h3>Meeting Site</h3>
        </div>
      </div>
        
       <div class="item">
         <img src="<?php echo base_url()?>assets2/meetingRoom/2.jpg" style="height:470px; width:1500px"  data-color="firebrick" alt="Second Image">
         <div class="carousel-caption">
            <h3>Meeting Site</h3>
        </div>
       </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome</h1>      
    <p>ACI Meeting Room Booking Site</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>MEETING ROOMS</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Developed By ACI MIS</p>
</footer>

</body>
</html>
