<?php

namespace Models;

use PDO;
use Src\Database;

class updateformModel
{

    private PDO $db; // déclaration de la variable de connexion
    public int $id;

    /**
     * @brief  Construction l'objet de la connexion avec l'ordre de se connecté à la bdd par la class include\Database
     */
    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @brief Recupération des controllers\details du disque
     * @return array
     */
    public function index(): array
    {
        $details = $this->db->prepare('SELECT * FROM disc join artist a on disc.artist_id = a.artist_id  where disc_id=?');
        $details->execute(array($this->getId()));
        $data['controllers\details'] = $details->fetch();

        $listArtist = $this->db->prepare('select distinct artist_name, artist_id from artist order by artist_name  ');
        $listArtist->execute();
        $data['artist'] = $listArtist->fetchAll();

        return $data;
    }


}