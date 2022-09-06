@extends('back.layout.index')
@section('content')
    <div class="sizeIcon h-screen flex justify-center items-center">
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
                <div class="dateC">{{$item->updated_at->format("d")}}</div>
                <div class="flex flex-col">
                    <div class="font-bold">{{$item->activity}}:</div>
                    <div>{{$item->response}}</div>
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
                x.setAttribute("value",index)
                x.setAttribute("type","submit")
                if(index<10){
                    x.setAttribute("href", `/backend/calendrier/0${index}`)
                }
                else{
                    x.setAttribute("href", `/backend/calendrier/${index}`)
                }
                x.innerHTML = index
                gridMonth.appendChild(x)
            }

        }
        creationDay()

    </script>
@endsection
