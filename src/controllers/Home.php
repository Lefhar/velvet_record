<?php

namespace Controller;

use Models\HeaderModel;
use Models\HomeModel;
use Models\UsersModel;

class Home
{
    /**
     * @brief Contrôleur par default de l'accueil qui contient la liste des disques
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $disk = new HomeModel();
        if (!empty($_GET['p'])) {
            $disk->setPage($_GET['p']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/index.php');
        include(baseDir . 'views/footer.php');
    }

}