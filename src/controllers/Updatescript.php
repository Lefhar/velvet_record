<?php

namespace Controller;

use Models\HeaderModel;
use Models\UpdateModel;
use Models\UsersModel;

class Updatescript
{
    /**
     * @brief Contrôleur de mise à jour du disque
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
        $disk = new UpdateModel();
        $data = $disk->update();
        if ($data['success']) {
            header('Location: index.php');
        } else {
            header('Location: index.php?page=update_form');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/update_form.php');
        include(baseDir . 'views/footer.php');
    }
}