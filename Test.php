<?
/*
$Name = ($_POST["Name"]);
$LastName = ($_POST["LastName"]);
$Nationality = ($_POST["Nationality"]);
$Email = ($_POST["Email"]);

$hostname = "Localhost";
$username = "impacto";
$password = "ImPaCtO2017&";
$dbname = "UsuariosRegistrados"
$usertable = "aspirantes";

$link = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error())
}

// Attemp insert query execution
$sql = "INSERT INTO $usertable (Name, LastName, Nationality, Email) VALUES ('$Name', '$LastName', '$Nationality', '$Email')";

if(mysqli_query($link, $sql)){
	// echo "Records addes successfully.";
}else{
	// echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

// Close Connection
mysql_close($link);*/

$mysqli = new mysqli("impactodigital.org", "impacto", "ImPaCtO2017&", "UsuariosRegistrados");

?>
