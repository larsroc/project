
<!DOCTYPE html>
<html>
    <head>
     
       <?php include 'menu.php';?>
    </head>
    <body>
        
        <div align="center">
            <table>
                <tr><th>userid</th><th>voornaam</th><th>straat</th><th>woonplaats</th><th>geslacht</th><th>opleiding</th><th>werkt</th><th>rekeningnummer</th><th>email</th><th>wachtwoord</th></tr>
                
                    <?php
                        //toont alle users
                        $sql = "select * from user"; 
                        //toont alle users beginnend met een M
                        //$sql = "select * from user where userid like 'M%'";
                        
                        $result = $conn->query($sql);
                        
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>". $row["userid"]. "</td>";
                            echo "<td>". $row["voornaam"]. "</td>";
                            echo "<td>". $row["straat"]. "</td>";
                            echo "<td>". $row["woonplaats"]. "</td>";
                            echo "<td>". $row["geslacht"]. "</td>";
                            echo "<td>". $row["opleiding"]. "</td>";
                            echo "<td>". $row["werkt"]. "</td>";
                            echo "<td>". $row["rekeningnummer"]. "</td>";
                            echo "<td>". $row["email"]. "</td>";
                            echo "<td>". $row["wachtwoord"]. "</td>";
                            echo "</tr>";
                        }
                        $conn = null;
                    
                    ?>
                
            </table>
        </div>

    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</html>
    <style>
            table,tr, td, th {
                border: 1px solid black;
                border-collapse: collapse;
            }
    </style>