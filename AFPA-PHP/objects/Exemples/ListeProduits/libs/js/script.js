$(document).ready(function(){

    let message = document.querySelector("#resultats");

    let nbRecherche = "";

    $("#btnrecherche").on("click", function(e){
        e.preventDefault();
        message.innerHTML = "";
        let rech = $("#recherche");
        let rechercheValue = rech[0].value;

        $.post({
            url: "../../src/ajax/rechercherajax.php",
            type: "POST",
            data: {
                "valRecherche": rechercheValue
            },
            success: function(res){
                message.innerHTML += res;
            },
            error: function() {
                message.innerHTML= '<div class="mt-5 alert alert-danger"><p>Erreur dans la recherche</p></div>';
            }
        });
    });

});


