
<?php

    include "../Models/CrudAtividade.php";

    $atividades = new CrudAtividade();
    $eventos =  $atividades->GetAtividades();

    $listaEventos = [];

	foreach ($eventos as $evento){

        $eventoFormatado = [
            "title" => $evento->nome_atividade,
            "start" => date($evento->data_previsao),

            //"url" => "../views/sucesso.php"

        ];

        $listaEventos[] = $eventoFormatado;

	}


	$listaEventos[] = $evento;

    echo json_encode($listaEventos);


