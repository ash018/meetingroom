<html>
<head>
<title>Admin Login</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="icon" href="<?php echo base_url();?>assets2/img/meet.png">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style2.css">



<style>
	#Form_data
	{
		
    position: relative;
    left: -5px;
    top: 235px;
    width: 204px;
    margin: 0px auto;
    text-align: left;
    padding: 20px;
    background-color: #ffffff;
    color: #333;
    border: 1px solid #e5e5e5;
    box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;

	}
	.buttons
	{
		border-color: #3ac162 !important;
		color: #fff;
		background-color: #09ACFF !important;
	}
	#ads
	{
		position:absolute;
		top:10px;
		left:300px;
	}
</style>
</head>

<body>
<!--form action="<?php echo base_url();?>authenticate_1/login" method="POST" autocomplete="off"-->
    
    <form method="post" action="<?php echo site_url('adminLogin/process'); ?>">  

<br><br>


<div class="pen-title">
  <h1>Meeting Room Booking</h1>
  <br>
  <h2>Admin Panel</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <!--div class="tooltip">Click Me</div-->
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <?php echo isset($error) ? $error : ''; ?> 
      <!--input type="text" name="empcode" id="email" placeholder="Usercode" autocomplete="off"  />
      <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"/-->
      <input type="text" name="user" id="email" placeholder="Usercode" autocomplete="off"  />
      <input type="password" name="pass" id="password" placeholder="Password" autocomplete="off"/>
	  <input type="submit" value="Login" class="buttons" name="login" autocomplete="off" >
	  <input type="reset" id="reset" class="buttons">
	   <!--p><a href="<?//php echo base_url();?>index.php/User/register">Register</a></p--> 

    </form>
  </div>
  
   <div class="form">
   
    <form action ="<?php echo base_url();?>User/Save" method="POST">
      
    
      <input type="text" name="email" id="email" placeholder="Username"/>
      <input type="password" name="password" id="password" placeholder="Password"/>
	  <input type="submit" value="Register" class="buttons" name="login" >
	  <input type="reset" id="reset" class="buttons">
    </form>
  </div>
</form>  
  
  <div class="cta"><a href="">Forgot your password?</a></div>
</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<script src="<?php echo base_url();?>assets/js/index1.js"></script>



 

</body>
</html>