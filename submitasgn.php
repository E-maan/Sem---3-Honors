<?php
require 'functionasgn.php';
require 'surveyasgn.php';
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$city=$_POST['city'];

// $sur=new Survey($name,$email,$gender,$phone,$date,$city);
echo '<h1>Congratulations on Completing the Survey</h1>';echo '<br>';
$pdo=connectToDb();
echo '<br>';
echo '<h2>Surveyed Students :</h2> ';echo '<br>';    
insert($pdo,'survey',$_POST);



selectAll($pdo,'survey','Survey');?>
<a href="formasgn.html">Go back to Survey


