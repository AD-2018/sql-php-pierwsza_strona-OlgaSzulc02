<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        <title>Olga Szulc</title>
</head>
    <body>
    <h1>Olga Szulc</h1>
         <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
        <div class="nav">
      <a href="../../index.php">Strona główna</a>
      <a href="../index.html">Cofnij</a>

      <div class="container">
        <div class="p1">
            <?php
            require_once("../../connect.php");
            $sql = "select Klasa, `ImieNazwisko`, (`WDW`.ID) as ID_TAB from `olgaszulc_pbd`.WDW, `olgaszulc_pbd`.Klasa, `olgaszulc_pbd`.Osoby where Osoby.ID=osoby_id and Klasa.ID=klasa_id order by ID_TAB asc";
                if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                 }
                    $result = mysqli_query($conn, $sql);
                if ( $result) {
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
                echo("<h2>Wiele do Wielu</h2>");
            
                echo("<table border='1'>");
                echo("<th>ID</th><th>Nauczyciel</th><th>Klasa</th>");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo("<td>".$row['ID_TAB']."</td><td>".$row['ImieNazwisko']."</td><td>".$row['Klasa']."</td><td> <form action="delete.php" method="POST">
                 <input name="id" value="'.$row['ID_TAB'].'" hidden>
                 <input type="submit" value="Usuń">
                 </form>
                 </td>');");
                        echo("</tr>");
                    };
                echo("</table>");
                echo ("<br>");
    ?>
     <h2>usuń po id</h2>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="out">
                </form>
        </div>
        <div class="str2B">
        </div>
        <div class="p2">
            <?php
            require_once("../../connect.php");
            $sql = "SELECT * FROM Osoby";
            
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
            
                $result = mysqli_query($conn, $sql);
                if ( $result) {
                     echo "<br>";
                 } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }
            
                echo("<h2>Nauczyciele</h2>");
            
                echo("<table border='1'>");
                echo("<th>ID</th><th>Imię i Nazwisko</th>");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo("<td>".$row['ID']."</td><td>".$row['ImieNazwisko']."</td><td> <form action="delete.php" method="POST">
                 <input name="id" value="'.$row['id'].'" hidden>
                 <input type="submit" value="Usuń">
                 </form>
                 </td>');");
                        echo("</tr>");
                    };
                echo("</table>");
                echo ("<br>");
        ?>
                   <h3>usuń po id</h3>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="Osoby" hidden>
                             <input name="opcja" value="1" hidden>
                    <input type="submit" class="button_x" value="out">
                </form>
        </div>
        <div class="p3">
            <?php
            require_once("../../connect.php");
            $sql = "SELECT * FROM Klasa";
            
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
            
                $result = mysqli_query($conn, $sql);
                if ( $result) {
                     echo "<br>";
                 } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }
            
                echo("<h2>Klasa</h2>");
            
                echo("<table border='1'>");
                echo("<th>ID</th><th>Klasa</th>");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo("<td>".$row['ID']."</td><td>".$row['Klasa']."</td>");
                        echo("</tr>");
                    };
                echo("</table>");
                echo ("<br>");
        ?>
        
        <h3>usuń po id</h3>
                <form action="../delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="Klasa" hidden>
                             <input name="opcja" value="2" hidden>
                    <input type="submit" class="button_x" value="out">
                </form>
        </div>
        <div class="p4">3</div>
        <div class="p5">4</div>
        <div class="p6">5</div>
        </div>
    </body>
</html>
