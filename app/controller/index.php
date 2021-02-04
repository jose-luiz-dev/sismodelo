<?php

class Index
{
    public function index()
    {
        include_once '../view/home.html';
    }
}

$template = file_get_contents('../template/estrutura.html');

ob_start();
$home = new Index;
$retorno = $home->index();
$retorno = ob_get_contents();
ob_end_clean();

$pagina = str_replace('{{dinamica}}', $retorno, $template);

echo $pagina;

