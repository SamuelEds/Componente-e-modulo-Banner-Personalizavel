<?php  

// IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class BannerPersonModelBannerconfig extends JModelAdmin{

	// CONFIGURAÇÃO DE TABELA
	public function getTable($nome = 'Bannerconfig', $prefix = 'BannerPersonTable', $config = array()){
		
		// RETORNAR A TABLE
		return JTable::getInstance($nome, $prefix, $config);

	}

}

?>