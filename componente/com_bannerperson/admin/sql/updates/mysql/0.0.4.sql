# ATUALIZAÇÃO 0.0.4
# NOVA MODIFICAÇÃO.
# UNINDO TABELAS.

# ADICIONAR COLUNAS À TABELA PRINCIPAL.
ALTER TABLE `#__bannerperson_config_banner`
ADD COLUMN `tipo_transicao` 		tinyint(40) 	NOT NULL DEFAULT 0 	AFTER `descricao`,
ADD COLUMN `texto_em_cima_ou_nao`	tinyint(2) 		NOT NULL DEFAULT 0 	AFTER `tipo_transicao`,
ADD COLUMN `texto_em_cima`			VARCHAR(255)	NOT NULL DEFAULT '' AFTER `texto_em_cima_ou_nao`;

# EXCLUIR A TABELA DE ANIMAÇÕES
DROP TABLE IF EXISTS `#__bannerperson_config_animation`;
