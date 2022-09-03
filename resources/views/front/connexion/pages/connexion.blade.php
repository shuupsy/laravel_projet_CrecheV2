<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="connexionBg flex items-center h-screen">
        <div
            class="justify-center w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="px-6 py-4">
                <h2 class="text-3xl font-bold text-center text-gray-700 dark:text-white">Baby'zou</h2>

                <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Bienvenue</h3>

                <form action="/connexion" method="POST">
                    @csrf
                    <div class="w-full mt-4">
                        <input name="username"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                            type="email" placeholder="Email Address" aria-label="Email Address" />
                    </div>

                    <div class="w-full mt-4">
                        <input name="password"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                            type="password" placeholder="Password" aria-label="Password" />
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <button type="submit"
                            class="px-4 py-2 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none"
                            type="button">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
