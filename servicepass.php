?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Service Pass System || View Pass Page</title>

<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=1000,height=1000');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</head>
<body>  

	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<?php include_once('includes/header.php');?>
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo about-bnrtext"> 
				<div class="container">
					<h2><a href="index.php">Home</a> / View Pass</h2> 
				</div>
			</div>
			<!-- //banner-text -->   
		</div>
	</div>
	<!-- //banner --> 
	<!-- contact -->
	<div class="contact agileits">
		<div class="container">  
			<div class="agileits-title">
				<h3>View Pass</h3>
			</div>  
			<div class="contact-agileinfo">
				
				
				<div class="clearfix"> </div>	
				<div class="table-responsive" id="divToPrint">
                                 <?php

// for login as admin enter below credential. Note: make this repo private after deployement.
//username:admin
//password:test@349988

$vid=$_GET['viewid'];
$sql="SELECT * from  tblpass where ID=$vid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <table border="2" class="table table-bordered" style="font-size: 18px;" > 
                                    <tr align="center">
<td colspan="6" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>
   <tr>
        <th scope>Category</th>
    <td colspan="3"><?php  echo ($row->Category);?></td>
  </tr>
<tr>
    <th scope>Full Name</th>
    <td colspan="3"><?php  echo ($row->FullName);?></td>
    
  </tr>
  <tr>
    <th scope>Photo</th>
    <td colspan="3"><img src="admin/images/<?php  echo ($row->ProfileImage);?>" width="50" height="50"></td>

  </tr>