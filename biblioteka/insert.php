<?php
echo("Insert");
require_once("connect.php");

$sql1 = "INSERT INTO biblAutor (imie) 
       VALUES (".'"'.$_POST['imie'].'"'.')';
$sql2 = "INSERT INTO biblTytul (tytul) 
       VALUES (".'"'.$_POST['tytul'].'"'.')';

echo "<li>".$sql1;

echo "<li>".$sql2;

if ($conn->query($sql1, $sql2) === TRUE) {
  header('Location: https://olga-szulc.herokuapp.com/biblioteka/dodawanie_usuwanie.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
