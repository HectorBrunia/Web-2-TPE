<?php

class AuthHelper {
     /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'log');
            die();
        }
    }

    public function IsLoggedIn(){
        if (!isset($_SESSION['IS_LOGGED'])) {
            return false;
        }
        else{
            return true;
        }
    }
}