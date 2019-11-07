$(document).ready(function() {


    $("#btn-buscar").on('click', function(){


         $.ajax({
      type: "GET",
      contentType: "application/json",
      timeout: 10000,
      url: "load-api.php",
      data: {
        name: team_name
      },
     success: function(teams) {

        var teams_total = teams.length;

        // nenhum time foi não encontrado
        if (teams_total == 0) {


          return false;

        }
        // lista todos os times encontrados
        else if (teams_total > 1) {

          // exibe o dropdown de times
          dropdownTeams(teams, teams_total);

        }
        // carrega as informacoes do time e atletas
        else {

          var team = teams[0];

          // carrega as infos do time
          teamInfo(team);

        }

      },
      error: function() {

        // esconde o dropdown de times
        $("#teams_list").hide();

        // esconde as informacoes do time e atletas
        $("#result").hide();

        // exibe mensagem
        alert('deu ruim');

        return false;

      }

    });





})


    // Dropdown de times
function dropdownTeams(teams, teams_total) {

    var teams_arr = teams,
      $team_input = $("#team-name"),
      $teams_list = $("#teams_list"),
      teams_list = teams;

    // limpa o conteudo do container
    $teams_list.html("");

    // esconde o dropdown
    $teams_list.hide();

    // monta o dropdown
    var wrapper = "<ul class='teams'>";

    for (var i = 0; i < teams_list.length; i++) {

      var team_slug = teams_list[i].slug,
          team_nome = teams_list[i].nome,
          team_cartoleiro = teams_list[i].nome_cartola;

      wrapper += " \
        <li data-inc='" + i + "' data-slug='" + team_slug + "' data-nome='" + team_nome + "'> \
        <div class='nome'>" + team_nome + "</div> \
        <div class='cartola'>" + team_cartoleiro + "</div> \
        </li>";

      escudoTeamList(team_slug, teams_list[i].url_escudo_svg, teams_list[i].url_escudo_placeholder_png);
    }

    wrapper += "</ul>";

    // insere a lista de times no container
    $teams_list.append(wrapper);

    // cria evento click para cada time do drowpdown
    $teams_list.find("li").on("click", function() {

      // esconde o dropdown de times
      $("#teams_list").hide();

      // insere no input nome do time o nome do time que foi clicado para carregar
      $team_input.val("").val($(this).data("nome"));

      // carrega as info. do time
      var team = teams_list[$(this).data("inc")];
      teamInfo(team);

    });

    // exibe o dropdown
    $teams_list.show().scrollTop(0);

  }
})
