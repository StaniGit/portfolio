<?php
require_once __DIR__ . '/config/Database.php';

class ContactForm {
    private $conn;
    private $table_name = "contacts";

    public $name;
    public $email;
    public $message;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function sendMessage() {
        // Valider les données
        if(empty($this->name) || empty($this->email) || empty($this->message)) {
            return false;
        }

        // Valider l'email
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // Préparer la requête pour insérer le message dans la base de données
        $query = "INSERT INTO " . $this->table_name . " (name, email, message) VALUES (:name, :email, :message)";

        $stmt = $this->conn->prepare($query);

        // Liaison des paramètres
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':message', $this->message);

        // Exécution de la requête
        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>