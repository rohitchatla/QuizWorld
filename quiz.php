<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css" media="screen">
input{
	width: 120px;
	height: 20px;
}	
</style>
<body>
	<ul>
		<li><a href="">HOME</a></li>
		<li><a href="">ADMIN</a></li>
		<li><a href="">DEVELOPERS</a></li>
		<li><a href="">FEEDBACK</a></li>

	</ul>
<?php
session_start();
include 'includes/dbh.inc.php';

?>
 

<?php


$number=$_GET['n'];
$sql="SELECT * FROM questions where id=$number";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		echo'<form action="post.php?n='.$number.'" method="post" accept-charset="utf-8">';
		echo "answer:1:".")".'<input type="submit" name="answer" value='.$row['ans1'].'>'."<br>";
	    echo "<br><br>";
	    echo "answer:2:".")".'<input type="submit" name="answer" value='.$row['ans2'].'>'."<br>";
	    echo "<br><br>";
	    echo "answer:3:".")".'<input type="submit" name="answer" value='.$row['ans3'].'>'."<br>";
	    echo "<br><br>";
	    echo "answer:4:".")".'<input type="submit" name="answer" value='.$row['ans4'].'>'."<br>";
	    echo '</form>';
	      
}
}else{
	echo "No result";
}
$conn->close();


?>
</body>
</html>