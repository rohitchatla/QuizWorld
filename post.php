<?php

if(isset($_POST['answer'])){


include 'includes/dbh.inc.php';

$number=$_GET['n'];
$correct=0;
	$sql="SELECT * FROM questions  where id=$number";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		$selected=$_POST['answer'];
		if($selected==$row['rightans'])//$row['ans2'];
	      	      {echo "right answer";
	      	 // echo'<form action="process.php" method="post">';
	      	// echo'<input type="submit" name="next" value="NEXT">';
	      	  	
	      	  	
	      	// echo '</form>';
	      	  $correct=1;
	      	  //session_start();
	      	  	 // $_SESSION['correctt']=$row['correct'];
	      	  	 // $_SESSION['correctt']=1;
session_start();
	      	  $name=$_SESSION['userUid'];	
	      	  if($correct==1){
$sql="UPDATE users SET correct=correct + 10 WHERE uidUsers = '$name'";
$result=$conn->query($sql);

	//session_destroy();	
}
	      	}

else
{echo "nope you choose wrong answer";}
}

}}


$number=$_GET['n'];
$sql="SELECT * FROM questions WHERE id=$number";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){

echo "<br><br>".$row['q']."<br><br>";
}}
$conn->close();









	



//$correct=$_SESSION['correctt'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
			<a href="question.php?n=<?php echo $next?> ">Next</a>

</body>
</html>