<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <link rel="icon" href="<?php echo base_url();?>assets2/img/meet.png">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to ACI Meeting Room Booking!</h1>

        <form action="<?php echo base_url();?>home/checkRoom" method="post">
            <b> &nbsp;&nbsp;Search For Room</b> <input type="date" id="booking_date" name="booking_date">
            <button class="btn btn-success">Submit</button>
            <br>
          <br>
           <br>
            
        </form>
       <?php
        
		
        if(!empty($id)){
            
           echo "&nbsp;<b>";echo($id[0]->booking_date);echo"</b><br><br>";
           $pieces = explode("-",$id[0]->booking_date);
          // echo "<b><h4>".$pieces[2]."th</b></h4> ";
            echo "<table border =\"1\" style='border-collapse: collapse' class='table'>"; 
		echo "<thead>
			<tr class>
				<th>Meeting Room Name</th>
				<th>Booked By</th>
                                <th>User Email</th>
				<th>User Phone</th>
				<th>Department</th>
                                <th>Program Title</th>
				<th>Booking Time</th>
				<th>End Time</th>
				<th>Message</th>
			</tr>
		</thead>
		<tbody>";
                
               
              
              
              
              for($i=0; $i<sizeof($id); $i++){
                echo "<tr>";
                echo "<td>";echo ($id[$i]->MeetingRoomName);echo"</td>";
                echo "<td>";echo($id[$i]->user_name);echo"</td>";
                echo "<td><a href=mailto:";echo ($id[$i]->user_email);echo">";echo ($id[$i]->user_email);echo"</a></td>";
                echo "<td>";echo($id[$i]->user_phone);echo"</td>";
                echo "<td>";echo($id[$i]->department);echo"</td>";
                echo "<td>";echo($id[$i]->program_title);echo"</td>";
                echo "<td>";echo($id[$i]->booking_time);echo"</td>";
                echo "<td>";echo($id[$i]->end_time);echo"</td>";
                echo "<td>";echo($id[$i]->additional_note);echo"</td>";
                echo "</tr>";
            }
        }
        else{
            echo 'On '.$bookdate;
            
            echo '&nbsp;No Booking';
        }
       

//print_r($data2['MeetingRoomName']);?>
         <form action="<?php echo base_url();?>home" method="post">
          <button style="position:absolute; left:600px; top:100px" class="btn btn-primary">Log Out</button>
           </form>
</div>

</body>
</html>