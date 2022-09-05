@extends('back.layout.index')
@section('content')

<div class="sizeIcon h-screen flex justify-center items-center">
    <div class="bg-zinc-100 MonthCalendar m-10">
        <div class="m-5">
            <p>
                Septembre 2022
            </p>
            <div class="m-10 grilleMonthCalendar">
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
                <button>01</button>
                <button>02</button>
                <button>03</button>
                <button>04</button>
                <button>05</button>
                <button>06</button>
                <button>07</button>
                <button>08</button>
                <button>09</button>
                <button>10</button>
                <button>11</button>
                <button>12</button>
                <button>13</button>
                <button>14</button>
                <button>15</button>
                <button>16</button>
                <button>17</button>
                <button>18</button>
                <button>19</button>
                <button>20</button>
                <button>21</button>
                <button>22</button>
                <button>23</button>
                <button>24</button>
                <button>25</button>
                <button>26</button>
                <button>27</button>
                <button>28</button>
                <button>29</button>
                <button>30</button>
            </div>
        </div>
    </div>
    <div class="Information flex flex-col items-center">
        @foreach ($journalier as $item)
        {{ date('d/m/Y') }}
            @if(1 == 1)
                <div class="w-11/12 bg-blue-200 h-10 m-2 flex items-center">
                    <p class="ml-5">
                        {{$item->updated_at->format('d/m/Y')}}: {{$item->activity}}: {{$item->response}} de {{$enfants[($item->backaccueil_id)-1]->nom}} {{$enfants[($item->backaccueil_id)-1]->prenom}}
                    </p>
                </div>
            @else
        @endforeach
    </div>

</div>
@endsection
