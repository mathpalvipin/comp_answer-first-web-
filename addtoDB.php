<?php 
$con=mysqli_connect("localhost","root","","hackerearth")or die(mysqli_error($con));
$fname= $_POST["firstname"]."<br>";
$lname= $_POST["lastname"]."<br>";
$cl=$_POST["Clevel"]."<br>";
$link=$_POST["questionlink"]."<br>";
$email= $_POST["email"]."<br>";
$phone= $_POST["phone"]."<br>";
$qn= $_POST["questionname"]."<br>";
$qd= $_POST["questiondiscription"]."<br>";

$Q="insert into question (first_name,Last_name,Email,Phone,Medium_of_Answer,Question_link,Question_name,Question_description)
value('$fname','$lname','$email','$phone','$cl','$link','$qn','$qd')";
$Us=mysqli_query($con,$Q) or  die(mysqli_error($con));
 ?>


