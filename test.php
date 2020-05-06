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
	<script type="text/javascript">

 
		function validate()
		{
			var fn=document.getElementById("firstname");
			var ln=document.getElementById("lastname");
			var phone=document.getElementById("phone");
			var email=document.getElementById("email");
			var cl1=document.getElementById("Clevel1");
			var cl2=document.getElementById("Clevel2");
			var war=document.getElementById("war");
			var flag=0;
       
			 if(fn.value=="")
			 	{fn.style.border="solid 2px red";
			 fn.placeholder="fill it first";
               flag=1;			 }
			 if(ln.value=="")
			 	{ln.style.border="solid 2px red";
			 ln.placeholder="fill it first";
			flag=1;}
			 if(phone.value=="")
			 	{phone.style.border="solid 2px red";
			 phone.placeholder="fill it first";
			flag=1;}
			  if(email.value=="")
			 	{email.style.border="solid 2px red";
			 email.placeholder="fill it first";
			flag=1;}
			  if((cl1.checked==false&&cl2.checked==false))
			 	{
			 		war.style.visibility="visible";
			 		flag=1;
			}
            if(flag==0)
			 return true;
			else 
				return false;
			 
		}
	</script>

</head>




<body style="margin: 0px">
	



	<div class="container" style="border: 1px solid;"><h2>Form For Question on Request</h2>
		<form  class="form-group" onsubmit="return validate()" method="post"  action="addtoDB.php">
<div class=" row">
	<div class="col-xs-6">
		
		
First name:
	<input type="text" name="firstname" class="form-control is-invalid  " id="firstname" >
	<div id="fnamevalid"  style="color: red;" >  </div>
	<div >	
Second name:
	<input type="text" name="lastname" class="form-control"  id="lastname">
	<div id="lnamevalid"  style="color: red;" >  </div>
    </div>
	<div >			
	Email id:
	<input type="text" name="email" class="form-control email" id="email">
	<div id="emailvalid"  style="color: red;" > </div>
   </div>
   <div >
Phone no:
		<input type="digit" name="phone" class="form-control" id="phone">		
		<div id="phonevalid"  style="color: red;" > </div>
		</div>	           
			<div class="checkbox"   >
     	Medium Of  Answer The Solution
     	<label >
     		<input type="checkbox" name="Clevel" value="phone"  id="Clevel1"  >Phone</label>
     		<label >
     			<input type="checkbox" name="Clevel" value="email" id="Clevel2"  >email
</label>
<span id="war" style="visibility: hidden; color: red ; font-family: cursive; font-weight: solid; ">check atleast one </span>
     	
     </div>
	</div>

<div class="col-xs-6">
	 Question Name: <input type="text" name="questionname" class="form-control">
	  Question Link<input type="text" name="questionlink" class="form-control input-md ">
	 Your Doubt Description<input type="text" name="questiondiscription" class="form-control input-md ">
     
     <div class="form-group" >
     		Experience with my sites
     		<select  class="form-control form-group" >
     			<option  value="fanstatic" name="Experience">Fantastic</option>
     			<option value="nice" name="Experience">Nice</option>
     			<option value="notgood"name="Experience">Not Good</option>
     		</select>
     	</div >
     	<input type="submit" value="Submit" class="btn btn-primary" style="float: right;" >  
     	<input type="submit" value="Cancel" class="btn btn-danger" style="float: right; margin-right: 5px; margin-bottom: 5px;">  
</div>
		
</div></form>
		
	</div>




	<div class="container" style="width: 70%; margin-left: 45px ;border:1px solid;border-top: 1px white; padding-left:50px; "><hr>
		<?php 
		 $x=3;while($x--){
		$row=mysqli_fetch_array($R)
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
   <div class="text-center"><button class="btn btn-primary btn-sx" type="button" onclick="window.location.href='Question.php'">Show all</button></div>
 <script type="text/javascript" src="javascript.js"></script>




</body>
</html>