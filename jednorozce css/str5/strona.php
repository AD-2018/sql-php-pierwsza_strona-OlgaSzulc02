<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        <title>Olga Szulc</title>
</head>
    <body>
     <h1>Olga Szulc</h1>
<?php include"menu2.php" ?>
            
      <div class="container">
            <div class="p1">
                <?php
                require_once("../../connect.php");
                $sql = "SELECT * FROM osoby_v2";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h2>Fryzjerzy</h2>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Fryzjer</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['imiona']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
                    ?>
                    <h3>usuń po id</h3>
                    <form action="delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="osoby_v2" hidden>
                             <input name="opcja" value="1" hidden>
                    <input type="submit" class="button_x" value="siup">
                </form>
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
                
                    echo("<h2>Klienci</h2>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Imię i Nazwisko</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['ImieNazwisko']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
            <h3>usuń po id</h3>
            <form action="delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="Osoby" hidden>
                             <input name="opcja" value="2" hidden>
                    <input type="submit" class="button_x" value="siup">
                </form>
            </div>
            <div class="p3">
                <?php
                require_once("../../connect.php");
                $sql = "select imiona, `ImieNazwisko`, (`WDW`.ID) as ID_TAB from `olgaszulc_pbd`.WDW, `olgaszulc_pbd`.osoby_v2, `olgaszulc_pbd`.Osoby where Osoby.ID=osoby_id and osoby_v2.id=klasa_id order by ID_TAB asc";
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
                    echo("<th>ID</th><th>Fryzjer</th><th>Klient</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID_TAB']."</td><td>".$row['imiona']."</td><td>".$row['ImieNazwisko']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
        ?>
        <h3>usuń po id</h3>
        <form action="delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="siup">
                </form>
            </div>
            <div class="p4">3</div>
        </div>
    </body>
</html>
