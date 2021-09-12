<?php  

// IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

// CLASSE CONTROLADORA QUE HERDA FUNCIONALIDADES DE ADMINISTRADOR. (EDITAR, EXCLUIR, ADICIONAR, ETC).
class BannerPersonControllerBannerconfigs extends JControllerAdmin{

	// OBTER MODELO DA VIEW DE EDIÇÃO.
	public function getModel($nome = 'Bannerconfig', $prefix = 'BannerPersonModel', $config = array('ignore.request' => true)){

		$model = parent::getModel($nome, $prefix, $config);

		return $model;

	}

}

?>