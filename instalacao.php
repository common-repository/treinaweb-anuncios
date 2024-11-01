<?php

register_activation_hook(ARQ_PRINCIPAL, 'criar_tabelas_log');

function criar_tabelas_log() {

	global $wpdb;

	$nome_tabela = $wpdb->prefix . 'anuncio_logs';

	$sql = 'CREATE TABLE ' . $nome_tabela . '(
		cod_log INT NOT NULL AUTO_INCREMENT,
		name_post VARCHAR(50) NOT NULL,
		dt_hr datetime NOT NULL,
		UNIQUE KEY (cod_log)
	);';

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);

	update_option('versao_tab_anuncio', V_TAB_ANUNCIO_LOG);
}