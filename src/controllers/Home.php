<?php

namespace Controller;

use Models\headerModel;
use Models\homeModel;
use Models\usersModel;

class home
{
    /**
     * @brief contrôleur par defaut de l'accueil qui contient la liste des disques
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $disk = new homeModel();
        if (!empty($_GET['p'])) {
            $disk->setPage($_GET['p']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/index.php');
        include(baseDir . 'views/footer.php');
    }

}