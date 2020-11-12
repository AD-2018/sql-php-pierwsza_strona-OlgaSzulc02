<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data i Czas</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="index.php">Strona Główna</a>
  </div>

<?php 
$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7374844"; 
$password = "6cxJ7qTmxi"; 
$dbname = "sql7374844";  

$conn= new mysqli($servername,$username,$password,$dbname);  
$sql ="select imie,year(curdate())-year(data_urodzenia) as wiek from pracownicy"; 
echo("<h3>Wiek poszczególnych pracowników </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
?>
  </body>
</html>
