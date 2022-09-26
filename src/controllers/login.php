<?php

namespace Controller;

use Exception;
use Models\headerModel;
use Models\usersModel;

class login
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $head = new headerModel();
        $header["menu"] = $head->catHead();

        $class = new usersModel();
        $data = $class->sign();

        $user = $class->getUser();
        if (!empty($user)) {
            header('Location: index.php');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/login.php');
        include(baseDir . 'views/footer.php');
    }
}