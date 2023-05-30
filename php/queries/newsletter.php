<?php
require_once "php/config/config.php"; 

$email = $_POST['email'];

// RENVOYER UN MESSAGE D'ERREUR SI L'EMAIL EST VIDE
if(empty($email)){
    $_SESSION['newsletter_error'] = "L'email ne peut pas être vide";
    header('Location:index.php');
    exit();
}
unset($_SESSION['newsletter_error']);

$sql = "SELECT * FROM newsletter";
$pre = $pdo->prepare($sql);
$pre->execute();
$queries = $pre->fetchAll();
foreach($queries as $newsletter){
    // RENVOYER UN MESSAGE D'ERREUR SI L'EMAIL EST DEJA DANS LA BDD
    if ($email == $newsletter['email']){
        $_SESSION['newsletter_error'] = "Vous êtes déjà inscrit à la newsletter";
        exit();
    }
}

unset($_SESSION['newsletter_error']);
// INSERER LE NOUVEL UTILISATEUR A LA BDD
$sql = "INSERT INTO newsletter(email) VALUES(:email)";
$dataBinded=array(
    ':email'   => $email,
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

// RENVOYER UN MESSAGE SI L'UTILISATEUR A ETE AJOUTER A LA BDD
$_SESSION['success'] = "Vous avez été inscrit avec succès";
exit();
?>