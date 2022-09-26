<?php

namespace Controller;

use Models\headerModel;
use Models\updateModel;
use Models\usersModel;

class updatescript
{
    /**
     * @brief contrôleur de mise à jour du disque
     * @return void
     */
    public function index()
    {
        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $disk = new updateModel();
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