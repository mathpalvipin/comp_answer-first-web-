<?php 
$con=mysqli_connect("localhost","root","","hackerearth")or die(mysqli_error($con));
$Q="select * from question";
$R=mysqli_query($con,$Q)or die(mysqli_error($con));

 ?>
 <!DOCTYPE html>
<html><head>
	<title></title>
	
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
		<nav class="navbar navbar-inverse" style="background-color: black; margin: 0px 0px 0px 0px;">
	<div class="container" style="margin: 0px 10px 0px 0px; width: 95%;">
		<div class="navbar-header"><img src="img/3.png" id="headerimg"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
			</button>
		</div>
		<div id="mynavbar" class="collapse navbar-collapse" >
		<ul class="nav navbar-nav navbar-right" >
			<li ><a  href="#div3">

			About</a></li>
			<li ><a href="#div2">Data Structure</a></li>
			<li ><a href="#div1">Input&Output</a></li>
		</ul></div>
	</div></nav>
	<div class="container" style="width: 70%; margin-left: 45px ;border:1px solid;border-top: 1px white; padding-left:50px; "><hr>
		<?php 
		 while($row=mysqli_fetch_array($R)){

?> 
	<div class="row"><div style="color: black;font-size: 20px ;font-weight:bold; font-family: sans-serif;
" ><?php echo $row['Question_name'];?></div></div>
		<div class="row">
			<div class="col-lg-1">
		<img src="img/1.jpg"></div>
		<div   class="col-lg-11" style="font-size: 25px ;font-weight: bold;padding: 20px 20px  0px 20px;color: #4c9cdf"><?php echo $row['first_name'] ?> <?php echo $row['Last_name']; ?>
		<p style="font-size: 10px; padding-left: 5px; color:black;"><?php echo $row['Email'];?></p></div>
	</div>
	<div class="row">
		<div  style="font-size: 20px;padding: 0px  " >Question link</div>
		<div  style="padding: 0px;"><a href="https://www.google.com/"><?php echo $row['Question_link'];?></div></a>
	</div>
	<div class="row">
		<div class="col-lg-1" style="font-size: 20px;padding: 0px">Doubt</div>
		<div class="col-lg-10" style="padding: 0px;font-size: 20px;"><?php echo $row['Question_description'];?></div>
	</div>

		<hr>
	<?php } ?>
	
</div>