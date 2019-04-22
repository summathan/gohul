<html>
<head>
<title>MOVIE</title>
</head>

<body>
<form action='payment.php' method='post'>

<?php

session_start();
$name=$_SESSION['username'];
$movie1=$_SESSION['movie'];

if(isset ($_POST['OK']))
{
$_SESSION['$sm']=trim($_POST['moviees']);
echo $_SESSION['$sm'];
}


echo '<center><i><h1>USER PAGE</h1></i></center><table><tr><td><i><h2><br><br><center>LAST BOOKED MOVIE:</h2></i>'.'<td><br><br><br><h2>'.$movie1.'</h2></tr></table></center>';
echo '<center><h2><i>SELECT MOVIE:</i></h2>';
$connection=mysqli_connect("localhost:3307","root","","booknow");
$query="SELECT movie_name FROM movie_details";
$result = mysqli_query($connection,$query); 
echo "<select name='moviees'>";
while($row = mysqli_fetch_array($result))
{
	
		echo "<option value='".$row['movie_name']."'>".$row['movie_name']."</option>";
		

}
echo '</select>';
?>


<input type='submit' name='Submit' value='OK'></center>

</form>

</body>
</html>