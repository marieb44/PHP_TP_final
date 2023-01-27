<?php

require_once './AccesDonnees.class.php';

class ModeleRestaurant
{
    private PDO $pdo;

    public function __construct()
    {
        $connexion = new AccesDonnees();
        $this->pdo = $connexion->getConnection();
    }

    public function getRestaurants(): array
    {
        $query = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description FROM restaurants;";
        $stmt = $this->pdo->query($query);
        $resultats = $stmt->fetchAll();
        return $resultats;
    }

    public function getRestaurantById(int $idResto): array
    {
        $query = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description FROM restaurants WHERE idRestaurant = :idResto;";
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(':idResto', $idResto);
        $pstmt->execute();
        $resultat = $pstmt->fetch();
        return $resultat;
    }

    public function getAvisRestaurant(int $idResto): array
    {
        $query = "SELECT auteur, note, commentaire  FROM avis WHERE idRestaurant = :idResto;";
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(':idResto', $idResto);
        $pstmt->execute();
        $resultats = $pstmt->fetchAll();

        return $resultats;
    }

}

?>
