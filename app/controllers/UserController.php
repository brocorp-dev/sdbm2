<?php


class UserController {

    public static function index() {

        $users = User::all();
        //include ('app/views/articles/index.php');
    }
        
}

?>