<?php
if(isset($_POST['next'])){
include 'includes/dbh.inc.php';
include 'post.php';
$number=$_GET['n'];
$next=$number+1;


$sql="SELECT * questions";
$result=$conn->query($sql);
$total=$result->num_rows;

if($next==$total){
	header("Location:qchoice.php");
	exit();
}else{
		header("Location:quiz.php?n=".$next);

}
     }