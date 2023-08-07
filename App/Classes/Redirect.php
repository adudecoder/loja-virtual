<?php

namespace App\Classes;

class Redirect
{

    /** Se for NULL o REDIRECT, redirecione para página inicial */
    public function redirect($redirect = null)
    {
        if (is_null($redirect)) {
            return header('Location:/');
        }

        return header('Location:$redirect');
    }
}
