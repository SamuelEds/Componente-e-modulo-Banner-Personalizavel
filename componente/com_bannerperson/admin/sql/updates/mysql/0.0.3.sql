# ARQUIVO DE INTALAÇÃO DOS BANCO DE DADOS.
# INSTALAÇÃO DE DOIS BANCOS DE DADOS PARA A CONFIGURAÇÃO DO BANNER. 
# (OBSERVAÇÃO: AS BASES DE DADOS PODEM MUDAR CONFORME O DESENVOLVIMENTO DO COMPONENTE/MÓDULO)

# EXCLUIR A BASE DE DADOS CASO ALGUMA JÁ EXISTIR.
DROP TABLE IF EXISTS `#__bannerperson_config_banner`;

# CRIAR A TABELA PARA CONFIGURAÇÃO DO BANNER.
CREATE TABLE `#__bannerperson_config_banner`(

	`id` 					INT(11) 		NOT NULL AUTO_INCREMENT,
	`caminho_para_imagem` 	TEXT 			NOT NULL DEFAULT '',
	`texto_alternativo` 	VARCHAR(255) 	NOT NULL DEFAULT '',
	`descricao`				VARCHAR(255)	NOT NULL DEFAULT '',
	PRIMARY KEY(`id`)

)DEFAULT CHARSET = utf8;

# EXCLUIR A BASE DE DADOS CASO ALGUMA JÁ EXISTA.
DROP TABLE IF EXISTS `#__bannerperson_config_animation`;

# CRIAR A TABELA PARA A CONFIGURAÇÃO DE ANIMAÇÕES DO BANNER.
CREATE TABLE `#__bannerperson_config_animation`(

	`id` 					INT(11) 		NOT NULL AUTO_INCREMENT,
	`tipo_transicao` 		tinyint(40) 	NOT NULL DEFAULT 0,
	`texto_em_cima_ou_nao` 	tinyint(2) 		NOT NULL DEFAULT 0,
	`texto_em_cima` 		VARCHAR(255) 	NOT NULL DEFAULT '',
	`id_banner_person` 		INT(11) 		NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`),
	CONSTRAINT `fk_bannerperson_config` FOREIGN KEY(`id_banner_person`) REFERENCES `#__bannerperson_config_banner`(`id`)

)DEFAULT CHARSET = utf8;
