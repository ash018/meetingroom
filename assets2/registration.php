<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="css/normalize.css">   
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
	
 
  <script>
  $(document).ready(function(){
    $("#datepicker").datepicker();
	
	$("#DesId").css("align","left");
  });
  
  </script>
 

    
    
  </head>

  <body>
	
    <div class="form">
      <img src="img/Info-Quize.png" width="100" height="50" align="middle" class="center">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registration</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
         <h1 style="color:#a0b3b0;"> Your Registration is here </h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Your Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" style="color: #fff;"/>
            </div>
        
            
          </div>
		  
		  
		 
		  
		  
		   
	

			
			<div class="field-wrap">
           
			<h3 style = "color:#a0b3b0; right:800px;">Select your Sex</h3>
		
			<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
		 
			<div align="middle"><br>
			
				<input type="radio" name="group1" value="male" style="color:#fff;"> <h2 style="color:#fff;">Male</h2><br>
			
			 
				<input type="radio" name="group1" value="female" style="color:#fff;"> <h2 style="color:#fff;">Female</h2><br>
				
			</label>	
			</div>
						
			
			
			
			</form>
			
			</div>
			
		  <div class="dropdown" >
				<div class = "hello">
					<h3 style = "color:#a0b3b0; " >Date of Birth:</h3>
				</div>
			
			<input  type="date" id="datepicker" style="color:#fff"/>
			</div>
			
			
			
			
			
		 <div class = "field-wrap"  >
		 <h3 id="desId" style="color:#a0b3b0;text-align:left; left:0px;  "  >Your Designation: </h3>
			<div class="dropdown" >
			
				
				<button class="dropbtn" type="button" data-toggle="dropdown" >Select Here
				<span class="caret"></span></button>
				<ul class="dropdown-menu" >
					<li><a href="#">PROFESSOR</a></li>
					<li><a href="#">ASSOCIATE PROFESSOR</a></li>
					<li><a href="#">ASSISTANT PROFESSOR</a></li>
					<li><a href="#">RESIDENTIAL PHYSICIAN</a></li>
					<li><a href="#">RESIDENT SURGEON</a></li>
					<li><a href="#">REGISTAR</a></li>
					<li><a href="#">ASSISTANT REGISTAR</a></li>
					<li><a href="#">MEDICAL OFFICER</a></li>
					<li><a href="#">GENERAL PRACTITIONER</a></li>
				</ul>
				</div>
				
				
			</div>
			
			
			 <div class = "field-wrap"  >
		 <h3 id="desId" style="color:#a0b3b0;text-align:left; left:0px;  "  >District : </h3>
			<div class="dropdown" >
			
				
				<button class="dropbtn" type="button" data-toggle="dropdown" >Select Here
				<span class="caret"></span></button>
				<ul class="dropdown-menu" >
					<li><a href="#">Dhaka</a></li>
					<li><a href="#">Rajshahi</a></li>
					
				</ul>
				</div>
				
				
			</div>
			
			
			
			
			
			<div class="field-wrap">
            <label>
              Contact No.
            </label>
            <input type="number"required autocomplete="off" style="color:#fff"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Address
            </label>
            <input type="text"required autocomplete="off" style="color:#fff"/>
          </div>



          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" style="color:#fff"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" style="color:#fff"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
		  
		  <img src="img/xeldrin.jpg"  align="" class="left-img">
		  <img src="img/paricel.jpg"   style="left:500px" class = "right-img">

          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
		  
		  
          </form>
		
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script-->

        <script src="js/index.js"></script>
		<script>
		
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}

// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
		
		
		</script>
		
		
		

    
    
    
  </body>
</html>
