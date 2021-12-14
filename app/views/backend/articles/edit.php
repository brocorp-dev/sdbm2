<!DOCTYPE html>
<html lang="fr">

<?php include($_SERVER['DOCUMENT_ROOT'].'/app/views/_partials/head.php') ?>

<body>

  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
              alt="Workflow">

          </div>
          <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
            <a href="/admin"
              class="border-transparent text-gray-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
              aria-current="page">
              Dashboard
            </a>

            <a href="/admin/articles"
              class="border-indigo-500 text-gray-900 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
              Articles
            </a>

            <a href="#"
              class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
              Catégories
            </a>

            <a href="#"
              class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
              Utilisateurs
            </a>
          </div>
        </div>
        <div class="hidden sm:ml-6 sm:flex sm:items-center">
          <p class="text-gray-400 hover:text-gray-500"> <?php echo($_SESSION['user_name']) ?></p>


          <!-- Profile dropdown -->
          <div class="ml-3 relative" x-data="{isopen: false}">
            <div>
              <button type="button" @click="isopen = ! isopen"
                class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
              </button>
            </div>

            <div x-show="isopen"
              class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                id="user-menu-item-0">
                Mon profil
              </a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                id="user-menu-item-1">
                Paramètres
              </a>

              <a href="logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                id="user-menu-item-2">
                Deconnexion
              </a>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <button type="button"
            class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                            Heroicon name: outline/menu

                            Menu open: "hidden", Menu closed: "block"
                            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
                            Heroicon name: outline/x

                            Menu open: "block", Menu closed: "hidden"
                            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-16">

      <form class="space-y-8 divide-y divide-gray-200" action="" method="post">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">
                Modification article
              </h3>
              <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Vous pouvez modifier les informations de votre article.
              </p>
            </div>

            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">

             <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Titre
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="name" id="name" value=" <?php echo($article['name']); ?>" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Description
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <textarea id="description" name="description" rows="3"
                    class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                  <?php echo($article['description']); ?>
                  </textarea>
                  <p class="mt-2 text-sm text-gray-500">Une courte description de votre produit.</p>
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="price_ht" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Prix
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="numeric" name="price_ht" id="price_ht" value="<?php echo($article['price_ht']); ?>" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Photo couverture
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <div
                    class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                        aria-hidden="true">
                        <path
                          d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <div class="flex text-sm text-gray-600">
                        <label for="file-upload"
                          class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                          <span>chargez un fichier</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">ou drag and drop</p>
                      </div>
                      <p class="text-xs text-gray-500">
                        PNG, JPG, GIF jusqu'à 10Mo
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pt-5">
          <div class="flex justify-end">
            <a href="/admin"
              class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Annuler
            </a>
            <button type="submit"
              class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Enregistrer
            </button>
          </div>
        </div>
      </form>
    </div>
  </main>
</body>

</html>