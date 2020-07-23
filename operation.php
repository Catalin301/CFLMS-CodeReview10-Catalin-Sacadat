<?php

require_once("database.php");
require_once("component.php");

$con=Createdb();

if(isset($_POST['create'])){

	createData();
	/*echo"Create button clicked";*/
}

if(isset($_POST['update'])){
	UpdateData();
}

if(isset($_POST['delete'])){
	deleteRecord();
}

/*if(isset($_POST['deleteall'])){
	deleteAll();
}*/


function createData(){

	$M_title=textboxValue("title");
	$M_image=textboxValue("image");
	$M_ISBN=textboxValue("ISBN");
	$M_short_description=textboxValue("short_description");
	$M_author=textboxValue("author");
	$M_publisher=textboxValue("publisher");
	$M_publish_date=textboxValue("publish_date");
	$M_type=textboxValue("type");

	if($M_title && $M_image && $M_ISBN && $M_short_description && $M_author && $M_publisher && $M_publish_date && $M_type){

		$sql="INSERT INTO media(title,image,ISBN,short_description,author,publisher,publish_date,type)

				VALUES('$M_title','$M_image','$M_ISBN','$M_short_description','$M_author','$M_publisher','$M_publish_date','$M_type')";

	if(mysqli_query($GLOBALS['con'],$sql)){
		TextNode("success","Record Successfully Inserted...!");
		
	}else{
		echo "ERROR";
	}

	}else{
		TextNode("error","Every Textbox has to have Data");
	}
}

function textboxValue($value){
	$textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));

	if(empty($textbox)){
		return false;
	}else{
		return $textbox;
	}
}

function TextNode($classname,$msg){
	$element="<h6 class='$classname'>$msg</h6>";

	echo "$element";
}

function getData(){
	$sql="SELECT * FROM media";

	$result=mysqli_query($GLOBALS['con'],$sql);

	if(mysqli_num_rows($result)>0){
		return $result;
	}
}

function UpdateData(){
	$media_id=textboxValue("Media_ID");
	$media_title=textboxValue("title");
	$media_image=textboxValue("image");
	$media_isbn=textboxValue("ISBN");
	$media_shortd=textboxValue("short_description");
	$media_author=textboxValue("author");
	$media_publisher=textboxValue("publisher");
	$media_pubdate=textboxValue("publish_date");
	$media_type=textboxValue("type");


	if($media_title && $media_image && $media_isbn && $media_shortd && $media_author && $media_publisher && $media_pubdate && $media_type){

		$sql="
			UPDATE media SET	title ='$media_title', 
								image ='$media_image',
								ISBN  ='$media_isbn',
								short_description ='$media_shortd',
								author='$media_author',
								publisher='$media_publisher',
								publish_date='$media_pubdate',
								type='$media_type' WHERE Media_ID='$media_id';
		";
		if(mysqli_query($GLOBALS['con'],$sql)){
			TextNode("success","Data Successfully Updated");
		}else{
			TextNode("error","Unable to Update Data");
		}

	}else{
			TextNode("error","Select Data Using Edit Icon");
	}
}

function deleteRecord(){
	$media_id=(int)textboxValue("Media_ID");

	$sql="DELETE FROM media WHERE Media_ID = $media_id";

	if(mysqli_query($GLOBALS['con'],$sql)){
		TextNode("success","Record Deleted");
	}else{
		TextNode("error","Unable to delete Record");
	}

}

/*function deleteBtn(){
	$result=getData();
	$i=0;

	if($result){
		while($row= mysqli_fetch_assoc($result)){
			$i++;
	if($i>3){
		buttonElement("btn-deleteall","btn btn-danger","<i class='fas fa-trash'></i>Delete All","deleteall","");
		return;
		}
	}
	}
}*/

/*function deleteAll(){
	$sql="DROP TABLE madia";

	if(mysqli_query($GLOBALS['con'],$sql)){
		TextNode("success","All Records deleted!");
		Createdb();
	}else{
		TextNode("error","Unable to delete Records!");
	}
}*/

function setID(){
	$getid = getData();
	$id=0;
	if($getid){
		while($row=mysqli_fetch_assoc($getid)){
		$id=$row['Media_ID'];	
		}
	}
	return($id + 1);
}
