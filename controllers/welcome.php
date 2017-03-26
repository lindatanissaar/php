<?php namespace Halo;

class welcome extends Controller

{
    public $requires_auth = false;
    function AJAX_login()
    {
        if (isset($_POST["password"]))
            $password = $_POST["password"];

            $users = query("SELECT user_id FROM users WHERE password = '{$password}'");
            if(!empty($users['user_id'])){

                $_SESSION['user_id'] = $users['user_id'];
            }

            exit (empty($users['user_id'])? 'puudub':'success');
    }

}

