<?php 

$host="localhost";
$user="root";
$password="";
$dbname="covidua";

$con = mysqli_connect($host,$user,$password,$dbname);

if(!$con){
	die("connection failed:" .mysqli_connect_error());
}
else{
	echo"database connected";
}