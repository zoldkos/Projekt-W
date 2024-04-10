<?php
// Engedélyezett fájltípusok
$allowed_types = array('jpg', 'jpeg', 'png', 'gif');

// Feltöltési mappa
$upload_dir = "uploads/";

if(isset($_POST["submit"])) {
    $filename = $_FILES['fileToUpload']['name'];
    $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    // a fájl típusa engedélyezett-e
    if (!in_array($filetype, $allowed_types)) {
        echo "Csak JPG, JPEG, PNG vagy GIF fájlokat tölthet fel.";
        exit();
    }
    
    // Fájl átnevezése egyedi névre
    $new_filename = uniqid().'.'.$filetype;
    $target_file = $upload_dir . $new_filename;
    
    // Feltöltés végrehajtása
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "A fájl feltöltése sikeres.";
    } else {
        echo "Hiba történt a fájl feltöltése során.";
    }
}
?>
