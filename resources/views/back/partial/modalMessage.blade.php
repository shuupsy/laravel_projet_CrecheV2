<button onclick="openBackMessage()" class="btnMessagerieBackOpen mx-32 my-10"></button>
<div id="boxMessagerie" class="hidden boxMessagerieBack mx-36 my-14 ">
    @foreach ($nurses as $item)
        <div>
            <button onclick="affichageIndividuel({{ $item->id }})" class="choixUsersMessagerie">{{ $item->nom }}
                {{ $item->prenom }}</button>
        </div>
    @endforeach
    @foreach ($messages as $item)
        <div id="messageInd" class="hidden affichageBox" value="{{$item->frontaccueil_id}}">
                {{ $item->message }} {{ $item->id }}
        </div>
    @endforeach
</div>

<script>
    function openBackMessage() {
        let boxMessagerie = document.getElementById("boxMessagerie")
        boxMessagerie.classList.toggle("hidden")
    }

    function affichageIndividuel(x) {
        let boxMessage = document.querySelectorAll(".affichageBox")
        boxMessage.forEach((index)=>{
            index.classList.add("hidden")
        })
        boxMessage.forEach((index)=>{
            if(index.attributes.value.value == x)
            index.classList.remove("hidden")
        })
    }
</script>
