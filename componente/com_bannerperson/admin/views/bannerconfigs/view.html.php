<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class BannerPersonViewBannerconfigs extends JViewLegacy{

	public function display($tpl = null){

		//CONTEÚDO AQUI...

		// CHAMAR A FUNÇÃO PARA CONFIGURAR O DOCUMENTO.
		$this->setDocumento();

		// CHAMAR MÉTODO PARA CONFIGURAR BARRA DE FERRAMENTAS.
		$this->barraTarefas();

		parent::display($tpl);
	}

	// DEFINIR DOCUMENTO.
	private function setDocumento(){

		// OBTER O DOCUMENTO.
		$documento = JFactory::getDocument();

		// DEFINIR O TÍTULO DO DOCUMENTO.
		$documento->setTitle(JText::_('COM_BANNERPERSON_TITULO_PAGINA_LISTA'));

	}

	private function barraTarefas(){

		// ADICIONAR BARRAS DE FERRAMENTAS.

		// ADICIONAR TÍTULO AO COMPONENTE.
		JToolbarHelper::title(JText::_('COM_BANNERPERSON_TITULO_COMPONENTE_VIEW_LISTA'));

		// ADICIONAR BOTÃO DE NOVO.
		JToolbarHelper::addNew('bannerconfig.add');

		// ADICIONAR BOTÃO DE EDIÇÃO.
		JToolbarHelper::editList('bannerconfig.edit');

		// ADICIONAR BOTÃO DE EXCLUSÃO.
		JToolbarHelper::deleteList('', 'bannerconfigs.delete');
	}

}

?>