
<?php 
$con=mysqli_connect("localhost","root","","hackerearth")or die(mysqli_error($con));
$Q="select * from question";
$R=mysqli_query($con,$Q)or die(mysqli_error($con));

 ?>
<!DOCTYPE HTML>

<html>

<head><link rel="stylesheet" type="text/css" href="style.css">
	<!--<style >
		h1{background-color: lightblue;
			font-size: 43px;padding: 10px 0px 10px 0px;
			 border-width:3px 2px 3px 2px;
			 border-style:dashed; }
		 b{background-color: blue;
			 font size:45px;
			 color: white}
		 p1{background-color:lightblue;                    this is internal css
			 	font-size: 40px;
			 	padding:5px 0px 5px 0px;
			 	border-style: solid;
			 	border-width:1px 1px 1px 1px;
			 	margin:0px 0px 0px 0px;
			 	color: rgba(0,0,255,1);}
	ol{  font-style:italic;
	 font-variant:normal;
	 font-weight: bolder;
	 font-size: 25px;
font-family: sans-serif;
	    }
	     p3{ font-style: unset;
	     font-variant:normal;
	     font-weight: bolder;
	     font-size: 20px;
	     font-family: sans-serif;  }

	</style>-->
	<style>  a:link{color: lightblue;}
      			a:visited{color: lightblue;
      			}a:hover{color:blue;}
      			 
      			 a:acitve{color:blue;}   
      			 
      			nav ul li{background-color: black;} 
		nav ul li a:link{
      			color: white;
      			}
      			nav ul li  a:visited{
      				color: white;
      			}
      			nav ul li  a:hover{
      				color: blue;
      			}
      			nav ul li  a:acive{
      				color: blue;
      			}
      			  		</style>

                 
	<title>hackearth solution</title>
	
		<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script > </script>
<body style="margin: 0px"  ;>	
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
	
 <!-- <div id="hackimg"> <img src="V:/HTML/New folder/2.png" alt ="hackerearth" height="100px" width="100px" id="hackerearth">
      <h1 style="color: white;border-color: black;">
   	      <tt><b> Hackerearth </b></tt>Question </h1></div>-->
    <!--inline have high precedence than internal and external -->

 <div id="bgimage">
 <center><div id="content"><h5 style=" font-size: 20px;"><tt>Here Solution Of <strong>Hackerearth </strong>Question
  
     <br><br>Solution Of<u> Basic Input Output</u>  And<br><br><mark> Implementation</mark> <del>Hello Bro</del>.</tt></h5>
     <p>Search  <span class="glyphicon glyphicon-search"></span></p>
     </div></center>
 </div>
 <!--  <p1 >here solution of <strong>hackerearth </strong>question</p1>
 <    <p2><br><br><tt>solution</tt> of<u> basic input output</u> and<mark> implementation</mark> <del>hello bro</del>.</p2>-->
<div class="container" style="padding: 0px; margin: 0px 10px 10px 10px;"> 
<div class=" col-xs-6 " style="width: 49%"id="div1" >                <h2>Solution of Question:Basic Programming</h2>
 <ol type="1"><li><a href="V:/HTML/New folder/solution/inputoutput.html" target="_blank">  input output</a></li>
              <li ><a href="V:/HTML/New folder/solution/implementation.html" target="_blank"> implementation</a></li>
              <li><a href="V:/HTML/New folder/solution/inputoutput.html" target="_blank"> Complexity Analysis </a></li>
              <li ><a href="V:/HTML/New folder/solution/implementation.html" target="_blank"> Operators </a></li>
  </ol>
</div>
<div class=" col-xs-6"  style="width: 49%"    id="div2">           <h2>Solution of Question:Data stucture</h2>
 <ol type="I"><li><a href="V:/HTML/New folder/solution/inputoutput.html" target="_blank"> Stack</a></li>
             <li ><a href="V:/HTML/New folder/solution/implementation.html" target="_blank"> Queue</a></li>
             <li><a href="V:/HTML/New folder/solution/inputoutput.html" target="_blank"> Linlist</a></li>
             <li><a href="V:/HTML/New folder/solution/implementation.html" target="_blank"> Tree</a></li>
 </ol>
</div>
</div>

<h2> This is my coding team</h2>
<div class="container">
	<div class="row">
		<div class="col-xs-3">
<img src="img/4.jpg" class="img-responsive img-thumbnail"> </div>
<div class="col-xs-6"><img src="img/5.jpg" class="img-responsive img-circle"> </div>

<div class="col-xs-3"><img src="img/6.jpg" class="img-responsive img-thumbnail"> </div>

</div>
</div>
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
               flag=1;       }
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
    <div   class="col-lg-11" style="font-size: 15px ;font-weight: bold;padding: 20px 20px  0px 20px;color: #4c9cdf"><?php echo $row['first_name'] ?> <?php echo $row['Last_name']; ?>
    <p style="font-size: 10px; padding-left: 5px; color:black;"><?php echo $row['Email'];?></p></div>
  </div>
  <div class="row">
    <div  style="padding: 0px;"><a href="https://www.google.com/"><?php echo $row['Question_link'];?></div></a>
  </div>
  <div class="row">
    <div class="col-lg-1" style="font-size: 20px;padding: 0px">Doubt</div>
    <div class="col-lg-10" style="padding: 0px;font-size: 20px;"><?php echo $row['Question_description'];?></div>
  </div>

    <hr>
  <?php } ?>
  
</div>
   <div class="text-center"><button style="margin-top: 10px;" class="btn btn-primary btn-sx" type="button" onclick="window.location.href='Question.php'" >Show all</button></div>
 <script type="text/javascript" src="javascript.js"></script>



<div class="container" style="border-width: 1px ; border-style: solid; margin: 10px 10px 10px 48px; "><p5>  To know about <em>hackerearth </em></p5>
<div class="jumbotron" style="padding: 0px 0px 0px 0px; margin: 10px 5px 10px 5px;"> 
	 
	    <p3><ul type="square"><li><a href="https://www.hackerearth.com" target="_blank">click here</a> for different tab</li>
                            <li> <a href="https://www.hackerearth.com">click here</a> same tab</li>
          </ul>
      </p3>
</div>
</div>

</body>
</html>