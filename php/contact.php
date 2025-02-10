<?php
session_start();

// Vérifier le jeton CSRF
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Erreur de sécurité : jeton CSRF invalide.");
    }

    // Inclure les fichiers de classe
    require_once __DIR__ . '/ContactForm.php';
    require_once __DIR__ . '/config/Database.php';

    // Créer une instance de la base de données
    $database = new Database();
    $db = $database->connect();

    // Créer une instance de ContactForm
    $contactForm = new ContactForm($db);

    // Récupérer les données du formulaire
    $contactForm->name = htmlspecialchars($_POST['name']);
    $contactForm->email = htmlspecialchars($_POST['email']);
    $contactForm->message = htmlspecialchars($_POST['message']);

    // Tenter d'envoyer le message
    if ($contactForm->sendMessage()) {
        // Définir une variable de session pour indiquer le succès
        $_SESSION['form_success'] = true;
    } else {
        // Définir une variable de session pour indiquer l'échec
        $_SESSION['form_success'] = false;
    }

    // Rediriger vers index.php
    header('Location: ../index.php');
    exit();
}
?>