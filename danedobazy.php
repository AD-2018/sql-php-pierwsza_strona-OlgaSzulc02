<html>
<head>
	<link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dodawanie i Usuwanie</title>
</head>
<body>
	  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a><br>
	  <div class="nav">
      <a href="index.php">Strona Główna</a>
  </div>
<h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">

				
			<label>Imie:</label><input type="text" name="imie"><br>
	
			<label>Dzial:</label><input type="text" name="dzial"></br>
				
			<label>Zarobki:</label><input type="text" name="zarobki"></br>
	
			<label>Data urodzenia:</label><input type="date" name="data_urodzenia"></br>
				
			<input type="submit" value="dodaj pracownika">
</form>
<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
	<label>Podaj id:</label><input type="number" name="id_pracownicy"</br>
				/* padding: 1rem; */></br>
   <input type="submit" value="usuń pracownika">
</form>
<?php

require_once("connect.php");
    echo("<h2>Podstawowe</h2>"); 
$sql ="select * from pracownicy"; 
echo("<h3>tabelka</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th><th>Usuń Pracownika</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
'<td>
<form action="delete.php" method="POST">
<input name="id" value="'.$row['id_pracownicy'].'" hidden>
<input type="submit" value="Usuń pracownika">
</form>
</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
