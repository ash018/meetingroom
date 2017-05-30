<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
    <link rel="icon" href="<?php echo base_url();?>assets2/img/meet.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>


</head>

    <style>
        span.input-group-addon{
            width:10px;
        }
        
    </style>
<body>

<div class="container">
   <br> <br> <br>  
    <div class="form-group">
                   
        <img src="<?php echo base_url()?>assets2/images/index.png" style="position: absolute; width:50px; left:650px; top:10px;" data-color="lightblue" alt="First Image">
                     <br><br><br>
                     
    <h1 style="position: absolute;  left:400px; top:50px;">
              Online Meeting Room Booking Form
            </h1>
    </div>
  <form action="<?php echo base_url();?>home/submit" method="post">
     <div class="form">
    <div class="form-group">
    <label for="email">Your Name</label>
    <input type="text" class="form-control" id="user_name" placeholder="Enter Your Name" name="user_name" required="">
    </div>
         
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email" required="">
    </div>
      
    <div class="form-group">
     <label for="pwd">Phone Number:</label>
     <input type="tel" class="form-control" id="user_phone"  name="user_phone" required="">
    </div>
         
    <div class="form-group">
     <label for="pwd">Program Title</label>
     <input type="text" class="form-control" id="program_title" name="program_title" required="">
    </div>
         
    <div class="form-group">
      <label for="pwd"> Select Meeting Room</label>
      <br>
      <select name="MeetingRoomName" id="MeetingRoomName" class="selectpicker" required="">
				<option value="Conference Hall 1">Conference Hall 1</option>
				<option value="Conference Hall 2">Conference Hall 2</option>
				<option value="Conference Hall 3">Conference Hall 3</option>
				
                                <option value="New Renovate Office Shuli">New Renovate Office Shuli</option>
                                <option value="New Renovate Office Krishnochura">New Renovate Office Krishnochura</option>
                                <option value="1st Floor Violet">1st Floor Violet</option>
                                <option value="1st Floor Daisy">1st Floor Daisy</option>
                                <option value="1st Floor Lily">1st Floor Lily</option>
                                <option value="2nd Floor Rose"> 2nd Floor Rose</option>
                                <option value="2nd Floor Orchid">2nd Floor Orchid</option>
                                <option value="3rd Floor Tulip">3rd Floor Tulip</option>
	</select>
      
    </div>
      
      <div class="form-group">
      <label for="pwd">Your Department</label>
      <br>
      <select name="department" id="department" class="selectpicker" required="">
				<option value="Admin">Admin</option>
				<option value="HR">HR</option>
				<option value="MIS">MIS</option>
				<option value="Logistics">Logistics</option>
                                <option value="AgriBusiness">AgriBusiness</option>
                                <option value="Pharma">Pharma</option>
                                <option value="Commercial">Commercial</option>
			</select>
        </div>
      
      
        <div class="form-group">
            <label for="pwd">Scheduled Meeting</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" style="width:220px;" required="">
        </div>
      <label for="pwd">Start Time</label>
       <div class="input-group bootstrap-timepicker timepicker">
            
           
            <!--input id="timepicker1" name="booking_time" type="text" class="form-control input-small"-->
            <input  name="booking_time" type="time" class="form-control input-small" required="">
            <span class="input-group-addon" ><i class="glyphicon glyphicon-time"></i></span>
        </div>
      <br>
      <label for="pwd">End Time</label>   
      <div class="input-group bootstrap-timepicker timepicker">
          
          <!--input id="timepicker2" name="end_time" type="text" class="form-control input-small"-->
          <input  name="end_time" type="time" class="form-control input-small" required="">

          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
      </div>
 
        <script type="text/javascript">
            $('#timepicker1').timepicker();
            $('#timepicker2').timepicker();
        </script>
        
        
        
        
      <div class="form-group">
       <label for="pwd">
          <br>
           Additional Notes
          <br>
        </label>
        <br>
        <textarea class="form-control" id="additional_note" name="additional_note"></textarea>
      </div>
        
      <div style="margin-left:556px;">
            <br>
            
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
        
      <div>
            <br>
            <br>
      </div>
  </form>
</div>
</div>
</body>
</html>
