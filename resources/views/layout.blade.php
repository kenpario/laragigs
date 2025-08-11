<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48 dark:bg-gray-700">
    <nav
        class="flex justify-between items-center m-4 dark:bg-gray-800 bg-gray-200 rounded-lg dark:text-white shadow-lg">
        <a href="/"><img class="w-24 rounded-lg" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer
        class="bg-gray-200 rounded-lg shadow-sm m-2 dark:bg-gray-800 fixed bottom-0 left-0 right-0 opacity-75 shadow-lg">
        <div class="flex w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="/"
                    class="hover:underline">Laragigs™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center text-sm font-medium text-white sm:mt-0">
                <li>
                    <a href="/listings/create" class="m-4 md:me-6 bg-red-500 hover:bg-red-600 p-2 rounded-lg">Post
                        Job</a>
                </li>
            </ul>
        </div>
    </footer>
    <x-flash-message />
</body>

</html>