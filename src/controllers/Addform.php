<?php

namespace Controller;

use Models\AddformModel;
use Models\HeaderModel;
use Models\UsersModel;

class Addform
{
    /**
     * @brief Controller qui charge le formulaire d'ajout d'un disque
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();

        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        if(!$class->isAdmin())
        {
            header('location: ../');
        }
        $disk = new AddformModel();
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/add_form.php');
        include(baseDir . 'views/footer.php');
    }
}