<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a><br>
	  <div class="nav">
      <a href="../index.php">Strona Główna</a>
    </div>
<?php 
	require_once("connect.php");
$sql = "select (biblTytul_biblAutor.id) as ID_TAB, autor, tytul, biblWypoz from biblTytul_biblAutor,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="ksiazka">');
    while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['id'].'">';
        echo($row['autor'].', '.$row['tytul']);
         echo "</option>";
    };
echo('</select>');
echo ('<br>');
	
	
require_once("connect.php");
  echo("<h3>Tabela</h3>"); 
$sql = "select (biblTytul_biblAutor.id) as ID_TAB, autor, tytul, biblWypoz from biblTytul_biblAutor,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>autor</th><th>tytul</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["autor"].'</td><td>'.$row["tytul"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>');
	
		
?> 
