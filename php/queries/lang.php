<?php require_once "php/config/config.php";

// The default language is french
$sql = "SELECT * FROM lang WHERE id = 1";
$pre = $pdo->prepare($sql);
$pre->execute();
$language = $pre->fetch(PDO::FETCH_ASSOC); 

// Get in the db the content corresponding to the language button clicked
if (array_key_exists('french', $_POST)){
    $sql = "SELECT * FROM lang WHERE id = 1";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $language = $pre->fetch(PDO::FETCH_ASSOC); 
} else if (array_key_exists('english', $_POST)){
    $sql = "SELECT * FROM lang WHERE id = 2";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $language = $pre->fetch(PDO::FETCH_ASSOC); 
}
?>
