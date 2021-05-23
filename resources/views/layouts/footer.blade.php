<footer x-data="{ open: false }" class="footer bg-primary py-1 shadow-2xl sticky text-white text-sm font-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    SOME © 2021
                </div>
            </div>
            <div class="flex">
                <div class="flex items-center justify-center space-x-4">
                    {{ date('d-m-Y - H:i:s') }}
                </div>
            </div>
            <div class="flex">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="https://www.facebook.com/someestudiantes"><i class="fab fa-facebook-square fa-2x hover:scale-120 transform transition ease-in-out"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
