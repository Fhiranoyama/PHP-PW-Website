<?php
include_once('templates/topo.php');  


if (isset($_GET['page'])) {
    $page = $_GET['page'];
    include_once($page . '.php');
} else {
    include_once('templates/conteudo.php');
}

include_once('templates/rodape.php'); 