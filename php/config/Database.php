<?php
class Database {
    private $host = "localhost"; // Adresse du serveur de base de données
    private $db_name = "portfolio"; // Nom de la base de données
    private $username = "root"; // Nom d'utilisateur par défaut de XAMPP
    private $password = ""; // Mot de passe par défaut de XAMPP (vide)
    public $conn;

    // Méthode pour établir la connexion à la base de données
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les exceptions pour les erreurs PDO
            $this->conn->exec("set names utf8"); // Encodage UTF-8
        } catch(PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>