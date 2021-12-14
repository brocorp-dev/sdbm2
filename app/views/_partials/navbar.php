
<header class="bg-indigo-600">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
            <div class="flex items-center">
                <a href="/">
                    <span class="sr-only">Workflow</span>
                    <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                        alt="">
                </a>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="articles" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">
                        Articles
                    </a>

                    <a href="categories" class="text-base font-medium text-white hover:text-indigo-50" key="Pricing">
                        Catégories
                    </a>

                    <a href="a-propos" class="text-base font-medium text-white hover:text-indigo-50" key="Docs">
                        A Propos
                    </a>

                    <a href="contact" class="text-base font-medium text-white hover:text-indigo-50" key="Company">
                        Contact
                    </a>
                </div>
            </div>
            <div class="ml-10 space-x-4">
                <?php if(isset($_SESSION['user_email']))
                {
                    echo('<p class="text-gray-100">Bonjour '. $_SESSION['user_name'] .'</p>');
                }
                else
                {
                    echo ('<a href="login"
                    class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">connexion</a>');
                }
                ?>
                </div>
        </div>
      
    </nav>
</header>
