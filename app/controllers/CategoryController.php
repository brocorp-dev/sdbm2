<?php

class CategoryController {

    public static function index()
    {
        $categories = Category::all();
        include('app/views/categories/index.php');
    }

    public static function create()
    {
        include('app/views/backend/category/create.php');
    }

}

?>