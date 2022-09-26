<?php

namespace Controller;

use Models\detailsModel;
use Models\headerModel;
use Models\usersModel;

class details
{

    /**
     * @brief  Controleur de la page controllers\details pour un disque
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $disk = new detailsModel();
        if (!empty($_GET['id'])) {
            $disk->setId($_GET['id']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/details.php');
        include(baseDir . 'views/footer.php');
    }
}