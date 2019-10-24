$(document).ready(function() {

    $("#btn-buscar").click(function(){

        var valor = $('#pesquisar-time').val();
        console.log(valor);

        $.ajax({
            type: "GET",
            url: "https://api.cartolafc.globo.com/times?q="+valor+"/",
            dataType: "json",
            beforeSend: function() {
                $("h2").html("Carregando...");
            },
            success: function (response) {
                var times = JSON.parse(response);
                console.log(times);
            }
        });


})

})
