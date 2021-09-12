<?php  

// IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class BannerPersonTableBannerconfig extends JTable{

	public function __construct($db){

		parent::__construct('#__bannerperson_config_banner', 'id', $db);

	}

}

?>