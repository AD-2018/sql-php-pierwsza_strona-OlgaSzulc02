<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pracownicy i Organizacja</h1>
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
$sql ="select nazwa_dzial, sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Suma zarobków w poszczególnych działach </h3>"); 
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
  </html>
