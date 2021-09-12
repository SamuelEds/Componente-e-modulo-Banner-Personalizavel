<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

$input = JFactory::getApplication()->input;

$controle = JControllerLegacy::getInstance('BannerPerson');
$controle->execute($input->getCmd('task'));
$controle->redirect();

?>