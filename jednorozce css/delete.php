<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("../connect.php");
echo("Delete" . "<br>");
echo $_POST['id'];
echo $_POST['tabela'];
echo $_POST['opcja'];
if ($_POST['opcja']==1 and $_POST['tabela']=="Osoby" or $_POST['tabela']=="osoby_v2" or $_POST['tabela']=="Firma" or $_POST['tabela']=="Sprawa" or $_POST['tabela']=="rola" or $_POST['tabela']=="projekt"){
    $opcja = "osoby_id";
} elseif ($_POST['opcja']==2 and $_POST['tabela']=="Klasa" or $_POST['tabela']=="osoby_v2" or $_POST['tabela']=="auta" or $_POST['tabela']=="Osoby" or $_POST['tabela']=="artykuly"){
    $opcja = "klasa_id";
echo "<br>";
if ($_POST['tabela']=="WDW"){
    $sql = "DELETE FROM ".$_POST['tabela']." WHERE id=".$_POST['id'];
} else {
    $sql = "SELECT count(".$opcja.") as wynik FROM `olgaszulc_pbd`.WDW where ".$opcja."=".$_POST['id'];
    $res = mysqli_query($sql);
    $row = mysqli_fetch_assoc($res);
    $liczenie_wynik = $row['wynik'];
    echo $sql."<br>".$res."<br>".$row."<br>".$liczenie_wynik."<br>";
    if ($liczenie_wynik<1){
        $sql = "DELETE FROM ".$_POST['tabela']." WHERE id=".$_POST['id'];
    }
}

if ($conn->query($sql) === TRUE) {
    header('Location: https://bazy-danych.herokuapp.com/jednorozce%20css/index.php');
echo $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>