<?php

class ArticleController {

    public static function index()
    {
        $articles = Article::all();
        require('app/views/articles/index.php');
    }

    public static function show($id)
    {
        $article = Article::find($id);
        include('app/views/articles/show.php');
    }

    public static function create()
    {
        include('app/views/backend/articles/create.php');
    }

    public static function edit($id)
    {
        $article = Article::find($id);
        include('app/views/backend/articles/edit.php');
    }

    public static function submit($name, $description,$price_ht)
    {

            $article = Article::insert($name,$description,$price_ht, '1');

            if($article)
            {
                $_SESSION['message_title'] = "Super ça !";
                $_SESSION['message'] = "Votre article a été créée avec succès";
                header('location: /admin');
            }
            else
            {
                $message = "Une erreur est survenue";
                return false;
            }
    }

}

?>