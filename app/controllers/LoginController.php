<?php

class LoginController {

    private $user,$email, $passwd;

    public function __construct()
    {
        $this->user = new User();
    }

    public static function getlogin()
    {
        require('app/views/auth/login.php');
    }

    public static function login($email, $passwd) {

            $user = new User();
            $result = $user::login($email , $passwd);

            if ($result) {
                // Set session variables
                $_SESSION["user_email"] = $email;
                $_SESSION["user_name"] = $result[0]['name'];
                $_SESSION["is_admin"] = "cat";

                //est-ce que l'user est admin ?
                if($result[0]['current_team_id'] = 1)
                {
                    header('location: /admin');
                }
                else
                {
                    require('app/views/index.php');
                }
            }
            else
            {
                $error = 'Uen erreur est survenue';
                return $error;
            }
    }

    public static function logout()
    {
        
        $_SESSION = array();
        session_destroy();

        $message = 'Vous vous êtes déconnecté avec succès';
        header('location: /');
    }

}

?>