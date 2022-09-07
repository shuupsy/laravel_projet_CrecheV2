@extends('back.layout.index')

@section('content')
    {{-- Header --}}
    <div class='headers flex flex-col justify-center items-start xl:items-center px-6'>
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Calendrier</h1>
    </div>

    <section class='contenu flex flex-col sm:flex-row sm:gap-5 justify-center items-center bg-zinc-100 sm:bg-inherit '>
        <div class="bg-zinc-100 p-3 w-full">
            <p>Septembre 2022</p>

            <form id="GridMonth" class="grilleMonthCalendar gap-2 p-3 w-full" action="">
                <div class="text-zinc-400">Lu</div>
                <div class="text-zinc-400">Ma</div>
                <div class="text-zinc-400">Me</div>
                <div class="text-zinc-400">Je</div>
                <div class="text-zinc-400">Ve</div>
                <div class="text-zinc-400">Sa</div>
                <div class="text-zinc-400">Di</div>
                <div></div>
                <div></div>
                <div></div>
            </form>
        </div>

        <div id="GenerateDay" class="activiteContainer bg-zinc-300 flex flex-col gap-2 items-left border-2 border-zinc-400">
            @foreach ($journalier as $item)
                @if ($validation == 1)
                    <div class="contenuActivite">
                        <div class="dateC">{{ $item->updated_at->format('d') }}</div>
                        <div class="flex flex-col">
                            <div class="font-bold">{{ $item->activity }}:</div>
                            <div>{{ $item->response }}</div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </section>

    <script>
        function creationDay() {
            let gridMonth = document.getElementById("GridMonth")
            for (let index = 1; index < 31; index++) {
                x = document.createElement("a")
                x.setAttribute("value", index)
                x.setAttribute("type", "submit")
                if (index < 10) {
                    x.setAttribute("href", `/backend/calendrier/0${index}`)
                } else {
                    x.setAttribute("href", `/backend/calendrier/${index}`)
                }
                x.innerHTML = index
                gridMonth.appendChild(x)
            }

        }
        creationDay()
    </script>
@endsection
