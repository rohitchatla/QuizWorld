<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="token.php" method="post">
<input type="checkbox" name="to" value="5">
    <input type="submit" name="su" value="send"></form>
	<?php
if(isset($_POST['su'])){
	session_start();
include 'index2.php';
include 'includes/dbh.inc.php';
$name=$_SESSION['userUid'];
$tok=$_POST['to'];

$sql="UPDATE users SET token=token + $tok WHERE uidUsers = '$name'";
$result=$conn->query($sql);

header("Location:quiz.php");
/*$conn->query("UPDATE posts SET food='$choice4' WHERE name='$name'");*/

header("Location:quiz.php");
}
/*$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		if($row['token']!=0){
			--$row['token'];
	      header("Location:quiz.php");
		}
else
{echo "no balance";}
}
}}*/
	?>
</body>
</html>