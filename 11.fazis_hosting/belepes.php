<?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
        try {
            // Kapcsolódás
            $dbh = new PDO('mysql:host=mysql.rackhost.hu;dbname=c48546kapcsolat_urlap', 'c48546akos', 'adatbazispassword',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            // Felhsználó keresése
            $sqlSelect = "select id, csaladi_nev, utonev, jelszo from felhasznalok where bejelentkezes = :bejelentkezes";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            if($row && ! password_verify($_POST['jelszo'], $row['jelszo'])) $row = false;
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }
    else {
        header("Location: bejelentkezes.html");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Belépés</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h1>Bejelentkezett:</h1>
                Azonosító: <strong><?= $row['id'] ?></strong><br><br>
                Név: <strong><?= $row['csaladi_nev']." ".$row['utonev'] ?></strong>
            <?php } else { ?>
                <h1>A bejelentkezés nem sikerült!</h1>
                <a href="bejelentkezes.html" >Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>
</html>