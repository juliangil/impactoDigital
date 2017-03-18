<?

$name = ($_POST["name"]);
$lastName = ($_POST["lastName"]);
$nationality = ($_POST["nationality"]);
$email = ($_POST["email"]);
$registerDate = ($_POST["registerDate"]);

$hostname = "localhost";
$username = "usuarioImpacto";
$password = "12345";
$dbname = "UsuariosRegistrados";
$usertable = "aspirantes";

$link = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "INSERT INTO aspirantes (name, lastName, nationality, email, registerDate) VALUES ('$name', '$lastName', '$nationality', '$email', '$registerDate')";

if(mysqli_query($link, $sql)){
	 echo "Records addes successfully.";
}else{
	 echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

mysql_close($link);

?>
