    switch ($url) {
                  
                  //frontend
                  case '/' :
                        PageController::home();
                        break;

                case '/articles' :
                        switch($_SERVER['REQUEST_METHOD'])
                        {
                              case 'GET' :
                                    ArticleController::index();
                                    break;
                              case 'POST' :
                                    ArticleController::show();
                                    break;
                        }     
                    break;

                case '/categories' :
                     switch($method)
                        {
                              case 'GET' :
                                    CategoryController::index();
                                    break;
                              case 'POST' :
                                    CategoryController::show();
                                    break;
                        }
                  break;

                  //sous page du frontend
                  case '/a-propos' :
                        PageController::about();
                        break;

                  case '/login' :
                         switch($method)
                        {
                              case 'GET' :
                                    LoginController::getlogin();
                                    break;

                              case 'POST' :
                                    LoginController::login($_POST['email'], $_POST['password']);
                                    break;
                        } 
                        break;

                  //Backend
                  case '/admin/logout' :
                        LoginController::logout();
                        break;

                  case '/admin' :

                        switch(explode('/',$uri)[2])
                        {
                              case 'dashboard' :
                              DashboardController::index();
                              break; 

                              case 'articles' :
                              ArticleController::edit(explode('/',$url)[3]);
                              break;

                              default : 
                              DashboardController::index();
                        }
                        
            }