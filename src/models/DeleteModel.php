<?php

namespace Models;

use Src\Database;

class DeleteModel
{
    private $db; // déclaration de la variable de connexion

    /**
     * @brief  Construction l'objet de la connexion avec l'ordre de se connecté à la bdd par la class include\Database
     */
    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @brief Supprime le disque ainsi que l'image
     * @return array
     */
    public function del(): array
    {
        $data = array();
        $data['success'] = false;
        if (!empty($_POST['confirm']) && !empty($_POST['disc_id'])) {
            $query = $this->db->prepare('select disc_picture,disc_id from disc where disc_id=?');
            $query->execute(array($_POST['disc_id']));
            $row = $query->fetch();
            $delete = $this->db->prepare('delete from disc where disc_id=?');
            if ($delete->execute(array($row['disc_id']))) {
                if (file_exists(baseFile.'assets/images/' . $row['disc_picture'])) {
                    unlink(baseFile.'assets/images/' . $row['disc_picture']);
                }
                $data['success'] = true;
                session_regenerate_id();

            }


        }
        return $data;
    }
}