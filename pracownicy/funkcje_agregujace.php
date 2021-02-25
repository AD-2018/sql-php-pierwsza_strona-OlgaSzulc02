<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Funkcje agregujące (group by, having)</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="../index.php">Strona Główna</a>
  </div>

<?php 
require_once("../connect.php");
   echo("<h1>sum,avg,count</h1>"); 
    
$sql ="select sum(zarobki) from pracownicy"; 
echo("<h3>Suma zarobków wszystkich pracowników</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql ="select sum(zarobki) from pracownicy where imie like '%a'"; 
echo("<h3>Suma zarobków wszystkich kobiet</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
echo("<h3>Suma zarobków mężczyzn pracujących w dziale 2 i 3  </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a'"; 
echo("<h3>Średnia zarobków wszystkich mężczyzn </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where (dzial=4)"; 
echo("<h3>Średnia zarobków pracowników z działu 4 </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo("<h3>Średnia zarobków mężczyzn z działu 1 i 2  </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy"; 
echo("<h3>Ilu jest wszystkich pracowników </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
echo("<h3>Ilu jest wszystkich pracowników </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
       echo("<h1>Group By</h1>"); 
    
$sql ="select nazwa_dzial, sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Suma zarobków w poszczególnych działach </h3>");
    echo("<li>".$sql);
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
    
    $sql ="select nazwa_dzial, count(imie) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Ilość pracowników w poszczególnych działach</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Średnie zarobków w poszczególnych działach </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select sum(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
echo("<h3>Suma zarobków kobiet i mężczyzn</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select avg(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
echo("<h3>Średnia zarobków kobiet i mężczyzn</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
           echo("<h1>Having</h1>"); 
            
    $sql ="select nazwa_dzial,sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having sum(zarobki)<28"; 
echo("<h3>Suma zarobków w poszczególnych działach mniejsza od 28 </h3>"); 
       echo("<li>".$sql);
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
                    
    $sql ="select nazwa_dzial,avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having avg(zarobki)>30"; 
echo("<h3>Średnie zarobków mężczyzn w poszczególnych działach większe od 30 </h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
     
    $sql ="select count(imie),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having count(imie)>3"; 
echo("<h3>Ilość pracowników w poszczególnych działach większa od 3  </h3>"); 
       echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
</html>
