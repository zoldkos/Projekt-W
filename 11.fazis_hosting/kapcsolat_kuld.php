<?php
// Adatbáziskapcsolat beállítása
$servername = "mysql.rackhost.hu";
$username = "c48546akos";
$password = "adatbazispassword";
$dbname = "c48546kapcsolat_urlap";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // A PDO kivételek kezelése
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Hiba: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nev = test_input($_POST["nev"]);
    $email = test_input($_POST["email"]);
    $uzenet = test_input($_POST["uzenet"]);

    // Szerveroldali ellenőrzés
    if (!preg_match("/^[a-zA-Z ]*$/",$nev)) {
        die("Hibás név formátum");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Hibás e-mail formátum");
    }

    // Adatok adatbázisba mentése
    try {
        $sql = "INSERT INTO kapcsolat (nev, email, uzenet) VALUES (:nev, :email, :uzenet)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':nev', $nev);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':uzenet', $uzenet);
        $stmt->execute();

        echo "Az üzenet elküldve!";
    } catch(PDOException $e) {
        die("Hiba: " . $e->getMessage());
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
