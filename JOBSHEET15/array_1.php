<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $listDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            for ($i=0; $i < count($listDosen); $i++) { 
                echo $listDosen[$i] . "<br>";
            }
        ?>
    </body>
</html>
