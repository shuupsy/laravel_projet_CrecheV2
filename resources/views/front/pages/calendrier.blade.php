@extends('front.layout.index')

@section('content')
    {{-- Header --}}
    <div class='headers flex flex-col justify-center items-start xl:items-center px-6'>
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Calendrier</h1>
    </div>

    <div class="h-screen flex justify-center items-center">
        <div class="bg-zinc-100 MonthCalendar m-10">
            <div class="m-5">
                <p>
                    Septembre 2022
                </p>
                <div>
                    <form id="GridMonth" class="m-10 grilleMonthCalendar" action="">
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
            </div>
        </div>
        <div id="GenerateDay" class="Information bg-zinc-300 flex flex-col gap-2 items-left activiteContainer">
            @foreach ($journalier as $item)
                @if ($validation == 1)
                    <div class="contenuActivite">
                        <div class="dateC">{{ $item->updated_at->format('d') }}</div>
                        <div class="flex flex-col">
                            <div class="font-bold">{{ $item->activity }}:</div>
                            <div>{{ $item->response }}</div>
                            {{ $enfants[0]->nom }}
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <script>
        function creationDay() {
            let gridMonth = document.getElementById("GridMonth")
            for (let index = 1; index < 31; index++) {
                x = document.createElement("a")
                x.setAttribute("value", index)
                x.setAttribute("type", "submit")
                if (index < 10) {
                    x.setAttribute("href", `/frontend/calendrier/0${index}`)
                } else {
                    x.setAttribute("href", `/frontend/calendrier/${index}`)
                }
                x.innerHTML = index
                gridMonth.appendChild(x)
            }

        }
        creationDay()
    </script>
@endsection
