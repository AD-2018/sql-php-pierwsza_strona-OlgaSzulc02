<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formatowanie dat</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="../index.php">Strona Główna</a>
  </div>

<?php 
require_once("connect.php");
    
 $sql = "select imie, date_format(data_urodzenia, '%W-%m-%Y') as data from pracownicy";
echo("<h3>Wyświetl nazwy dni w dacie urodzenia</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql1 = "set lc_time_names = 'pl_PL'";
    $sql2 = "select date_format(curdate(), '%W') as data";
echo("<h3>Wypisz dzisiejszą nazwę dnia po polsku</h3>");
    echo("<li>".$sql1);
    echo("<li>".$sql2);
$result = mysqli_query($conn, $sql1);  
$result = mysqli_query($conn, $sql2);
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
      
 $sql = "select imie, date_format(data_urodzenia, '%w-%M-%Y') as data from pracownicy";
echo("<h3>Wyświetl nazwy miesięcy w dacie urodzenia</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "SELECT curtime(4) as data"; 
echo("<h3>Obecna, dokładna godzina (z dokładnością do milisekund)</h3>");
    echo("<li>".$sql);    
$result = mysqli_query($conn, $sql);
echo('<table border="1">');
echo('<th>Data</th>');
while($row=mysqli_fetch_assoc($result)){
    echo('<tr>');
    echo('<td>'.$row['data'].'</td>');
    echo('</tr>'); }
 echo('</table>');
    
 $sql = "select imie, date_format(data_urodzenia, '%Y-%M-%W') as data from pracownicy";
echo("<h3>Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
     $sql = "select datediff(curdate(),'2002-08-01')*24 as godz,datediff(curdate(),'2002-08-01')*24*60 as min";
echo("<h3>Ile godzin, minut już żyjesz</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>godziny</th><th>minuty</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['godz']."</td><td>".$row['min']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
 $sql = "select date_format('2002-08-01','%j') as ur";
echo("<h3>W którym dniu roku urodziłaś się</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['ur']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 

$sql = "select imie, date_format(data_urodzenia,'%W') as dzien,nazwa_dzial from pracownicy,organizacja where id_org=dzial order by 
CASE
  WHEN dzien = 'Poniedziałek' THEN 1
  WHEN dzien = 'Wtorek' THEN 2
  WHEN dzien = 'Środa' THEN 3
  WHEN dzien= 'Czwartek' THEN 4
  WHEN dzien = 'Piątek' THEN 5
  WHEN dzien = 'Sobota' THEN 6
  WHEN dzien = 'Niedziela' THEN 7
END ASC";
    echo("<h3>Pracownicy z nazwami dni tygodnia, w których się urodzili z sortowaniem od Poniedziałku do Niedzieli</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dzien</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['dzien']."</td><td>".$row['nazwa_dzial']."</td>");       
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
   
 $sql1 = "set lc_time_names = 'pl_PL'";
 $sql2 = "select count(date_format(data_urodzenia, '%W')) as il from pracownicy where date_format(data_urodzenia, '%W')='Poniedziałek'";
echo("<h3>Ilu pracowników urodziło się w poniedziałek</h3>");
    echo("<li>".$sql2);
$result = mysqli_query($conn, $sql1);  
$result = mysqli_query($conn, $sql2);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>ilosc</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['il']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 

     $sql1 = "set lc_time_names = 'pl_PL'";
    $sql2 = "select data_format(data_urodzenia,'%W') as dzien, count(date_format(data_urodzenia, '%W')) as liczba from pracownicy group by dzien order by 
CASE
  WHEN dzien = 'Poniedziałek' THEN 1
  WHEN dzien = 'Wtorek' THEN 2
  WHEN dzien = 'Środa' THEN 3
  WHEN dzien= 'Czwartek' THEN 4
  WHEN dzien = 'Piątek' THEN 5
  WHEN dzien = 'Sobota' THEN 6
  WHEN dzien = 'Niedziela' THEN 7
END ASC";
    echo("<h3>Ilu pracowników urodziło się w poszczególne dni tygodnia (wpisz w pierwszej kolumnie nazwę dnia tygodnia a w drugiej ile osób się wtedy urodziło). Dni powinny być posortowane od Poniedziałku do Niedzieli </h3>");
    echo("<li>".$sql2);
$result = mysqli_query($conn, $sql1);  
$result = mysqli_query($conn, $sql2); 
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>dzien</th><th>liczba</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['dzien']."</td><td>".$row['liczba']."</td>");       
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
</html>
