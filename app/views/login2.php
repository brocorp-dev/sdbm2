<?php

   session_start();

   @$login=$_POST["email"];
   @$password=md5($_POST["password"]);
   @$valider=$_POST["valider"];
   $erreur="";

   if(isset($valider)){
      include("database/connexion.php");
      $sel=$pdo->prepare("select * from utilisateurs where email=? and password=? limit 1");
      $sel->execute(array($login,$password));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["name"]=ucfirst(strtolower($tab[0]["name"]));
         $_SESSION["autoriser"]="oui";
         header("location:index.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>

<!DOCTYPE html>
<html lang="fr">
      <?php include('resources/_partials/head.php') ?>
  
      <body>

    <div class="flex h-screen bg-gray-100 p-4 rotate">
        <div class="sm:max-w-xl md:max-w-3xl w-full m-auto">
            <form method="POST" action="login.php"
                class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-green-500 sm:border-0">
               
                <div
                    class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 text-gray-300 py-4 bg-gradient-to-l from-green-400 via-green-500 to-green-600">
                    <div class="flex-1 absolute bottom-0 text-white p-10">
                        <h3 class="text-4xl font-bold inline-block">Connexion</h3>
                        <p class="text-gray-700 whitespace-no-wrap">
                            Bienvenue parmi nous!
                        </p>
                    </div>
                    <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white"
                        viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <polygon points="0,0 100,100 100,0">
                    </svg>
                </div>
                <div class="flex-1 p-6 sm:p-10 sm:py-12">
                    <h3 class="text-xl text-gray-700 font-bold mb-6">
                        Connexion <span class="text-gray-400 font-light">à votre compte</span></h3>

                    <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="lukeskywalker@awesomejedi.com">
                    </div>
                    </div>

                     <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="*****">
                    </div>
                    </div>


                    <div class="flex flex-wrap items-center mt-4">
                        <div class="w-full sm:flex-1">
                            <input type="submit" value="Connecter"
                                class="w-full sm:w-auto bg-green-500 text-green-100 px-6 py-2 rounded hover:bg-green-400 focus:outline-none cursor-pointer">
                        </div>
                        <div class="text-sm text-gray-500 hover:text-gray-700 pt-4 sm:p-0">
                            <a href="#">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <p class="w-full text-xs text-left text-gray-700 mt-6">
                        Pas encore de compte?
                        <a class="text-green-500 hover:text-green-500" href="register.php">
                            S'enregistrer
                        </a>
                    </p>

                </div>
        </div>
    </div>


    </body>

</html>