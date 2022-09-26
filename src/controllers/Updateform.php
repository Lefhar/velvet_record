<?php

namespace Controller;

use Models\HeaderModel;
use Models\UpdateformModel;
use Models\UsersModel;

class Updateform
{

    /**
     * @brief Controller de la page de modification d'un disque
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        if(!$class->isAdmin())
        {
            header('location: ../');
        }
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $disk = new UpdateformModel();
        if (!empty($_GET['id'])) {
            $disk->setId($_GET['id']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/update_form.php');
        include(baseDir . 'views/footer.php');
    }

}