<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=labor7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, csaladi_nev, utonev, jelszo from felhasznalok where bejelentkezes = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            if(password_verify($_POST['jelszo'], $row['jelszo'])) {
                $_SESSION['csn'] = $row['csaladi_nev']; $_SESSION['un'] = $row['utonev']; $_SESSION['login'] = $_POST['felhasznalo'];
            }
            else
                $row = false;
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
