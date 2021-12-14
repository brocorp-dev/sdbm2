<?php

class PageController {

     public static function home()
    {
        $articles = Article::all();
        $title = 'Au revoir';
        $subtitle = 'Entrez dans un monde so far away';
        require('app/views/pages/home.php');
    }

    public static  function about()
    {
        $title = 'A Propos';
        $subtitle = 'Entrez dans un monde so far away';
        include('app/views/pages/about.php');
    }

    public static function login()
    {
        require('app/views/auth/login.php');
    }

    public static  function admin()
    {
        $title = 'Dashboard';
        $subtitle = 'Bienvenue .' ;
        include('app/views/backend/index.php');
    }

}

?>