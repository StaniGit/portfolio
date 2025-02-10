<?php
ob_start();
session_start();

// Vérifier le jeton CSRF
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Erreur de sécurité : jeton CSRF invalide.");
    }

    // Inclure les fichiers de classe
    require_once __DIR__ . '/contactForm.php';
    require_once __DIR__ . '/config/Database.php';

    // Créer une instance de la base de données
    $database = new Database();
    $db = $database->getConnection();

    // Créer une instance de ContactForm
    $contactForm = new ContactForm($db);

    // Récupérer les données du formulaire
    $contactForm->name = htmlspecialchars($_POST['name']);
    $contactForm->email = htmlspecialchars($_POST['email']);
    $contactForm->message = htmlspecialchars($_POST['message']);

    // Rediriger vers index.php
    header('Location: ../index.php');
    exit();
}
ob_end_flush();
?>