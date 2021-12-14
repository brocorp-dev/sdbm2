<?php 
     require_once($_SERVER['DOCUMENT_ROOT'].'/autoload.php');
?>

<!DOCTYPE html>
<html lang="fr">
<?php include(dirname(__FILE__).'/../_partials/head.php') ?>

<body>
  <div class="min-h-full">
    <nav class="bg-white border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex">
            <div class="flex-shrink-0 flex items-center">
              <img class="block lg:hidden h-8 w-auto"
                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">

            </div>
            <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
              <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
              <a href="#"
                class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                aria-current="page">
                Dashboard
              </a>

              <a href="#"
                class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
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

              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>

              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="py-10">
      <header>
        <div class="max-w-7xl flex mx-auto px-4 sm:px-6 lg:px-8 justify-between">
          <h1 class="text-3xl font-bold leading-tight text-gray-900">
            Dashboard
          </h1>

          <div class="ml-4 mt-2 flex-shrink-0">
            <a href="/admin/articles/create"
              class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Crér un article
            </a>
          </div>
        </div>
      </header>
      <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- Replace with your content -->
          <div class="px-4 py-8 sm:px-0">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nom
                          </th>
                          <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Slug
                          </th>
                          <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Prix
                          </th>
                          <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            disponible
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Modifier</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">

                        <?php 
            foreach ($categories as $category)
            {
            ?>
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <?php echo($category['name']) ; ?>
                          </td>
                         
                       
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/articles/edit/<?php echo($category['id']) ?>"
                              class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                          </td>
                        </tr>
                        <?php
            }
            ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- /End replace -->
        </div>
      </main>
    </div>


      <?php if(isset($_SESSION['message'])) 
{
?>

      <div aria-live="assertive"
            class="fixed inset-x-0 bottom-0  flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                  <!--
      Notification panel, dynamically insert this into the live region when it needs to be displayed

      Entering: "transform ease-out duration-300 transition"
        From: "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        To: "translate-y-0 opacity-100 sm:translate-x-0"
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
                  <div
                        class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="p-4">
                              <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                          <!-- Heroicon name: outline/check-circle -->
                                          <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                    </div>
                                    <div class="ml-3 w-0 flex-1 pt-0.5">
                                          <p class="text-sm font-medium text-gray-900">
                                                <?php echo(isset($_SESSION['message_title']) ? $_SESSION['message_title'] : 'test'); ?>
                                          </p>
                                          <p class="mt-1 text-sm text-gray-500">
                                                <?php echo($_SESSION['message']) ?>
                                          </p>
                                    </div>
                                    <div class="ml-4 flex-shrink-0 flex">
                                          <button
                                                class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Close</span>
                                                <!-- Heroicon name: solid/x -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                      <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                </svg>
                                          </button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <?php
}
?>
  </div>

</body>

</html>