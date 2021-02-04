<?php
    
class Login
{
    public function index()
    {
        include_once '../view/login.html';
    }
}

$template = file_get_contents('../template/estrutura.html');

ob_start();
$paginaLogin = new Login;
$retorno = $paginaLogin->index();
$retorno = ob_get_contents();
ob_end_clean();

$pagina = str_replace('{{dinamica}}', $retorno, $template);

echo $pagina;
