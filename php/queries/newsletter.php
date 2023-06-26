<?php
require_once "php/config/config.php"; 

$email = $_POST['email'];

$sql = "SELECT * FROM newsletter";
$pre = $pdo->prepare($sql);
$pre->execute();
$queries = $pre->fetchAll();
foreach($queries as $newsletter){
    // Send back an error message if the email is already in the db
    if ($email == $newsletter['email']){
        $_SESSION['newsletter_error'] = "You already subscribed to the newsletter";
        header('Location:index.php');
        exit();
    }
}

unset($_SESSION['newsletter_error']);

// Insert the email in the db
$sql = "INSERT INTO newsletter(email) VALUES(:email)";
$dataBinded=array(
    ':email'   => $email,
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

// Send back a success message if the email was added to the db
$_SESSION['success'] = "You are now subscrided to our newsletter";
header('Location:index.php');
exit();
?>