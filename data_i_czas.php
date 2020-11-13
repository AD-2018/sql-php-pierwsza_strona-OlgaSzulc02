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
      
    $sql ="select imie,year(curdate())-year(data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial and nazwa_dzial='serwis'"; 
echo("<h3>Wiek poszczególnych pracowników z działu serwis</h3>");
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
              
    $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy"; 
echo("<h3>Suma lat wszystkich pracowników </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial and nazwa_dzial='handel'"; 
echo("<h3>Suma lat pracowników z działu handel</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy where imie like '%a'"; 
echo("<h3>Suma lat kobiet</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 

        $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy where imie not like '%a'"; 
echo("<h3>Suma lat mężczyzn</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
        $sql ="select nazwa_dzial,avg(year(curdate())-year(data_urodzenia)) as srednia_lat from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Średnia lat pracowników w poszczególnych działach</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>srednia_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['srednia_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
        $sql ="select nazwa_dzial,sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Suma lat pracowników w poszczególnych działach</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
            
        $sql ="select nazwa_dzial,max(year(curdate())-year(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Najstarsi pracownicy w każdym dziale</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
            
        $sql ="select nazwa_dzial,min(year(curdate())-year(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by dzial"; 
echo("<h3>Najmłodsi pracownicy z działu: handel i serwis</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
               
        $sql ="select imię,nazwa_dzial,min(year(curdate())-year(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by dzial"; 
echo("<h3>Najmłodsi pracownicy z imienia z działu: handel i serwis</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa_dzial</th><th>wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
               
        $sql ="select imie,datediff(curdate(),data_urodzenia) as dni from pracownicy"; 
echo("<h3>Długość życia pracowników w dniach </h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dni</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['dni']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
                   
        $sql ="select imie from pracownicy where imie not like '%a' order by data_urodzenia asc limit 1"; 
echo("<h3>Najstarszy mężczyzna</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
</html>
