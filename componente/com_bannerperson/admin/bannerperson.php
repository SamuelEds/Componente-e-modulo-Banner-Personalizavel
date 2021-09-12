<?php  

// IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

// OBTER O CONTROLADOR GERAL.
$controle = JControllerLegacy::getInstance('BannerPerson');

// OBTER O INPUT DA APLICAÇÃO.
$input = JFactory::getApplication()->input;

// EXECUTAR A TAREFA QUE FOI PASSADA POR INPUT.
$controle->execute($input->get('task'));

// REDIRECIONAR QUANDO FOR PRECISO.
$controle->redirect();

?>