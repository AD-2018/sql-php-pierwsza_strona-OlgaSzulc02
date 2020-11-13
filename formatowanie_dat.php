<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formatowanie dat</h1>
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

$sql ="select date_format(data_urodzenia,'%w-%m-%y') as data from pracownicy"; 
echo("<h3>Wyświetl nazwy dni w dacie urodzenia</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
      

?>
  </body>
</html>
