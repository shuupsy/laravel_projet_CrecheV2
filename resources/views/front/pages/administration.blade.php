@extends('front.layout.index')

@section('content')
    <section id="admin" class="bg-white dark:bg-gray-900">

        <div class="headers flex flex-col justify-center items-center px-6">
            <h1 class='text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white pt-4 sm:pt-0'>ADMINISTRATION</h1>
        </div>


        <div class='contenu flex flex-col gap-10 justify-center items-evenly'>
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
            <div class=' gap-8 grid sm:grid-cols-2'>
                {{-- Contrat --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-16 w-16 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-file text-4xl'></i>
                    </div>
                    <p>Voir le contrat</p>
                </div>

                {{-- Jours de présence --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-16 w-16 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bx-calendar text-4xl'></i>
                    </div>
                    <div>
                        <p>Jours de présence <span
                                class='font-bold border border-dotted border-black rounded-full py-2 px-3'>{{ $data[0]->presence }}</span>
                        </p>
                        <p>{{ $data[0]->dayOfPresence }}</p>
                    </div>
                </div>

                {{-- Autorisation de sortie --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-16 w-16 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-door-open text-4xl'></i>
                    </div>
                    <p>Autorisation de sortie :
                        @if ($data[0]->exitPermission == true)
                            <i class='bx bxs-check-square text-2xl text-green-500'></i>
                        @else
                            <i class='bx bxs-x-square text-2xl text-red-500'></i>
                        @endif
                    </p>
                </div>

                {{-- Autorisation de photos --}}
                <div class='flex items-center gap-5'>
                    <div
                        class="flex justify-center items-center h-16 w-16 border-2 border-neutral-300 text-[#D8E2DC] rounded-full">
                        <i class='bx bxs-camera text-4xl'></i>
                    </div>
                    <p>Autorisation de photos :
                        @if ($data[0]->picturePermission == true)
                            <i class='bx bxs-check-square text-2xl text-green-500'></i>
                        @else
                            <i class='bx bxs-x-square text-2xl text-red-500'></i>
                        @endif
                    </p>
                </div>

            </div>
        </div>


    </section>
@endsection
