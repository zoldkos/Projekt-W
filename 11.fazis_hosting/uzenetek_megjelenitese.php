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

// Üzenetek lekérdezése és megjelenítése táblázatban
$sql = "SELECT nev, email, uzenet, datum, id, IF(nev IS NULL OR nev = '', 'Vendég', nev) AS felhasznalo_neve, datum FROM kapcsolat ORDER BY datum DESC";
$stmt = $dbh->query($sql);
?>

<table>
    <tr>
        <th>Küldés ideje</th>
        <th>Felhasználó név vagy "Vendég"</th>
        <th>E-mail</th>
        <th>Üzenet</th>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
        <td><?php echo $row['datum']; ?></td>
        <td><?php echo $row['felhasznalo_neve']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['uzenet']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>