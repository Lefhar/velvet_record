<?php

namespace Controller;

use Models\CategorieModel;
use Models\HeaderModel;
use Models\UsersModel;

/**
 * @brief Controller categorie gére les catégories par artiste id
 */
class Categorie
{
    /**
     * @brief Fonction index du contrôleur controllers\categorie
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $disk = new CategorieModel();
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