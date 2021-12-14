<?php

class AdminController 
{
    public static function index()
    {
        $articles = Article::all();
        require('app/views/backend/index.php');

    }

    public static function index_category()
    {
        $categories = Category::all();
        require('app/views/backend/category/index.php');

    }



}