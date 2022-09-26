<?php

namespace Controller;

use Models\DetailsModel;
use Models\HeaderModel;
use Models\UsersModel;

class details
{

    /**
     * @brief  Controller de la page controllers details pour un disque
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $disk = new DetailsModel();
        if (!empty($_GET['id'])) {
            $disk->setId($_GET['id']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/details.php');
        include(baseDir . 'views/footer.php');
    }
}