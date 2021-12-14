  
  <?php

  if(isset($_POST["email"]) && isset($_POST["password"]))
  {
    $login=$_POST["email"];
    $password=$_POST["password"];
    $result = LoginController::login($login,$password);
  }
    
  ?>
  
  <!DOCTYPE html>
  <html lang="fr">
  <?php 
        include(dirname(__FILE__).'/../_partials/head.php') ?>

  <body class="bg-gray-300">

      <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
          <div class="sm:mx-auto sm:w-full sm:max-w-md">

              <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                  Connexion
              </h2>
          </div>

          <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
              <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                  <form class="space-y-6" action="" method="POST">
                      <div>
                          <label for="email" class="block text-sm font-medium text-gray-700">
                              Adresse email
                          </label>
                          <div class="mt-1">
                              <input id="email" name="email" type="email" autocomplete="email" required
                                  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          </div>
                      </div>

                      <div>
                          <label for="password" class="block text-sm font-medium text-gray-700">
                              Mot de passe
                          </label>
                          <div class="mt-1">
                              <input id="password" name="password" type="password" autocomplete="Mot de passe" required
                                  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          </div>
                      </div>

                      <div class="flex items-center justify-between">
                          <div class="flex items-center">
                              <input id="remember-me" name="remember-me" type="checkbox"
                                  class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                              <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                  se souvenir de moi
                              </label>
                          </div>

                          <div class="text-sm">
                              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                  Mot de passe oublié ?
                              </a>
                          </div>
                      </div>

                      <div>
                          <button type="submit"
                              class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Connexion
                          </button>
                      </div>

                      <?php 
                            if(isset($result)) 
                            {
                            ?>
                            <div class="flex items-center text-center mt-4">
                                <p class="text-red-500 font-semibold text-center">Oups, une erreur est survenue</p>
                            </div>
                            <?php } ?>
                  </form>


              </div>
          </div>
      </div>

  </body>

  </html>