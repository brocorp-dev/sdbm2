 <?php
 
      return array(

            //frontend
            '/'    =>               'PageController/home',
            'articles' =>           'ArticleController/index',
            'articles/show/{$1}' =>  'ArticleController/show',
            'categories' =>         'CategoryController/index',
            'categories/show/{$1}' =>  'CategoryController/show',
            'login' =>              'LoginController/getlogin',
            'a-propos' =>           'PageController/about',

            //backend
            'admin' =>              'AdminController/index',
            'admin/articles' =>      'AdminController/index',
            'admin/category' =>     'AdminController/index_category',

            'admin/articles/create' => 'ArticleController/create',
            'admin/articles/edit/{$1}' => 'ArticleController/edit',

            );

?>