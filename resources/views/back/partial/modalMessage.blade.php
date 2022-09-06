<button onclick="openBackMessage()" class="btnMessagerieBackOpen mx-32 my-10 shadow-md border border-slate-200"></button>

<div id="boxMessagerie" class="hidden boxMessagerieBack mx-36 my-14 shadow-md border border-slate-200">
    <div class="teamMessagerie">
        @foreach ($nurses as $item)
            <div class="bubbleTeam">
                <div>
                    <img class="imgTeam" src="/assets/img/team{{ $item->img }}" alt="">
                </div>
                <div>
                    <button onclick="affichageIndividuel({{ $item->id }})"
                        class="choixUsersMessagerie">{{ $item->nom }}
                        {{ $item->prenom }}</button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex flex-col gap-2 h-full overflow-auto">
        @foreach ($messages as $item)
            <div id="messageInd" class="hidden affichageBox shadow-md" value="{{ $item->frontaccueil_id }}">
                {{ $item->message }}
            </div>
        @endforeach
    </div>

</div>

<script>
    function openBackMessage() {
        let boxMessagerie = document.getElementById("boxMessagerie")
        boxMessagerie.classList.toggle("hidden")
    }

    function affichageIndividuel(x) {
        let boxMessage = document.querySelectorAll(".affichageBox")
        boxMessage.forEach((index) => {
            index.classList.add("hidden")
        })
        boxMessage.forEach((index) => {
            if (index.attributes.value.value == x)
                index.classList.remove("hidden")
        })
    }
</script>
