<?php
echo("Delete<br>");
echo $_POST['id_pracownicy'];

require_once("connect.php");

$sql = "DELETE FROM pracownicy WHERE id=".$_POST['id_pracownicy'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
