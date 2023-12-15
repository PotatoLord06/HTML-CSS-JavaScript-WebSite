<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votacions";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$nom = $_POST['Nom'];
$correu = $_POST['Correu'];
$desti = $_POST['Desti'];


$sql = "INSERT INTO voting (Nom, Correu, Desti)
VALUES ('$nom', '$correu', '$desti')";


if ($conn->query($sql) === TRUE) {
  header("Location: votacio.html");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>