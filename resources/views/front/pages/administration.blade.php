@extends('front.layout.index')

@section('content')
    <section id="admin" class="bg-white dark:bg-gray-900">

        <div class="headers flex flex-col justify-center items-center px-6">
            <h1 class='text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white'>ADMINISTRATION</h1>
        </div>

        <div class='contenu flex flex-col gap-10'>
            {{-- Upload un document --}}
            <form action="" method="post"enctype="multipart/form-data">
                @csrf
                <div id="upload-cm" class='flex items-center gap-5'>
                    <label for="file-upload"
                        class="flex items-center gap-3 px-6 py-2 font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 cursor pointer">
                        <i class='bx bx-download text-xl'></i>
                        <p>Nouveau document</p>
                    </label>
                    <input type="file" name="image" id="file-upload" required>
                    <p class='text-md'>ex: certificats médicaux, ... </p>
                </div>
            </form>

            {{-- Documents à consulter --}}
            <div class='flex flex-wrap gap-5'>
                {{-- Contrat --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-20 w-20 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-file text-5xl'></i>
                    </div>
                    <p>Voir le contrat</p>
                </div>


                {{-- Autorisation de sortie --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-20 w-20 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-door-open text-5xl'></i>
                    </div>
                    <p>Autorisation de sortie :
                        {{-- @if ($data->exitPermission == true)
                                    <i class='bx bxs-check-square text-2xl text-green-500'></i>
                                @else
                                    <i class='bx bxs-x-square text-2xl text-red-500'></i>
                                @endif --}}
                    </p>
                </div>

                {{-- Autorisation de photos --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-20 w-20 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-camera text-5xl'></i>
                    </div>
                    <p>Autorisation de photos :
                        {{-- @if ($data->picturePermission == true)
                                    <i class='bx bxs-check-square text-2xl text-green-500'></i>
                                @else
                                    <i class='bx bxs-x-square text-2xl text-red-500'></i>
                                @endif --}}
                    </p>
                </div>

                {{-- Jours de présence --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-20 w-20 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bx-calendar text-5xl'></i>
                    </div>
                    <div>
                        {{-- <p>Jours de présence <span class='font-bold border border-dotted border-black rounded-full py-2 px-3'>{{ $data->presence }}</span></p>
                                <p>{{ $data->dayOfPresence }}</p> --}}
                    </div>
                </div>

            </div>
        </div>


    </section>
@endsection
