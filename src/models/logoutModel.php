<?php

namespace Models;
class logoutModel
{
    /**
     * @brief  Fonction de déconnexion supprime la session et le cookie
     * @return array|void
     */
    public function out()
    {
        $data = array();
        $data['success'] = false;
        if (!empty($_POST['confirm'])) {
            if (!empty($_SESSION["controllers\login"])) {
                setcookie('controllers\login', "", time() - 3200);
                unset($_SESSION['controllers\login']);
                session_destroy();
                $data['success'] = true;
            }
            return $data;

        }
    }
}