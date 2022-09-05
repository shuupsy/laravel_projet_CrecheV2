@extends("front.layout.index")
@section("content")

<section class="bg-white dark:bg-gray-900 flex justify-center items-center sizeIcon h-screen">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Our Executive Team</h1>

        <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1590649880765-91b1956b8276?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Anna Conda</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">directrice</p>
            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Amelia. Anderson</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">secrétaire</p>


            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Olivia Wathan</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericultrice moyenne section</p>

            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Vanessa Doe</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericultrice grande section</p>
            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Mia</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericultrice petite section</p>

            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1608174386344-80898cec6beb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Junior REIS</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericulteur moyenne section</p>
            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Joseph Gonzalez</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericulteur grande section</p>
            </div>

            <div class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group  hover:bg-[#8EC9C1] rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1521488741203-dcc320950ce5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">

                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Emma Doe</h1>

                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Puericultrice petite section</p>
            </div>
        </div>
    </div>
</section>

@endsection
