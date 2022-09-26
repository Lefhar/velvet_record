<?php

namespace Controller;

use Models\categorieModel;
use Models\headerModel;
use Models\usersModel;

/**
 * @brief controleur controllers\categorie gére les catégories par artiste id
 */
class categorie
{
    /**
     * @brief fonction index du contrôleur controllers\categorie
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $disk = new categorieModel();
        if (!empty($_GET['p'])) {
            $disk->setPage($_GET['p']);
        }
        $disk->setArtist($_GET['id']);
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/categorie.php');
        include(baseDir . 'views/footer.php');
    }
}