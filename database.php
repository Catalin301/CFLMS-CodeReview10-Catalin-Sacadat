<?php

function Createdb(){
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="cr10_catalinsacadat_biglibrary";

	$con=mysqli_connect($servername,$username,$password);

	if(!$con){
		die("Connection Failed:".mysqli_connect_error());
	}

	$sql="CREATE DATABASE IF NOT EXISTS $databasename";

	if(mysqli_query($con,$sql)){

		$con=mysqli_connect($servername,$username,$password,$databasename);

		$sql="

		CREATE TABLE IF NOT EXISTS Media(
					Media_ID INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
					title VARCHAR(50),
					image VARCHAR(200),
					ISBN VARCHAR(20),
					short_description VARCHAR(100),
					author VARCHAR(25),
					publisher VARCHAR(25),
					publish_date TIMESTAMP(6),
					type VARCHAR(10)

			)";



		if(mysqli_query($con,$sql)){

			return $con;
		}else{

			echo "Cannot Create table:" .mysqli_error($con);
		}

				
		
	}else{
		echo "Error while creating database".mysqli_error($con);
	}
}