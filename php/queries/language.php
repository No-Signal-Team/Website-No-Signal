<?php
require_once "php/config/config.php"; 

$french = $_POST['french'];
$english = $_POST['english'];

$sql = "SELECT * FROM language";
$pre = $pdo->prepare($sql);
$pre->execute();
$queries = $pre->fetchAll();
foreach($queries as $language){
    // RENVOYER UN MESSAGE D'ERREUR SI L'EMAIL EST DEJA DANS LA BDD
    if ($french == $language['french']){
        $sql = "SELECT * FROM language WHERE id=1";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $language = $pre->fetch(PDO::FETCH_ASSOC);
        header('Location:index.php');
        exit();
    } else if ($english = $POST_['english']){
        $sql = "SELECT * FROM language WHERE id=2";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $language = $pre->fetch(PDO::FETCH_ASSOC);
        header('Location:index.php');
        exit();
    }
}

header('Location:index.php');
exit();
?>