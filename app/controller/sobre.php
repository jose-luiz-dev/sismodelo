<?php

class Sobre
{
    public function index()
    {
        include_once '../view/sobre.html';
    }
}

$template = file_get_contents('../template/estrutura.html');

ob_start();
$sobre = new Sobre;
$retorno = $sobre->index();
$retorno = ob_get_contents();
ob_end_clean();

$pagina = str_replace('{{dinamica}}', $retorno, $template);

echo $pagina;