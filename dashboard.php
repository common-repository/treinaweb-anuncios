<?php

add_action( 'wp_dashboard_setup', 'anuncios_dashboard_cb' ); 
 
function anuncios_dashboard_cb() { 
 
  wp_add_dashboard_widget( 
    'anuncios_dashboard', 
    'Exibição de Anúncios', 
    'mostra_anuncios_dashboard_cb' 
    ); 
 
} 
 
 
function mostra_anuncios_dashboard_cb() {

	global $wpdb;

	$nome_tabela = $wpdb->prefix . 'anuncio_logs';

	mostrar_tabela_log($wpdb, $nome_tabela);
	mostrar_total_log($wpdb, $nome_tabela);

}

function mostrar_tabela_log($wpdb, $nome_tabela) {

	$anuncios = $wpdb->get_results("SELECT name_post, count(*) as total_por_post FROM {$nome_tabela} group by name_post order by total_por_post desc");

	require_once('includes/tabela-log.php');

}

function mostrar_total_log($wpdb, $nome_tabela) {

	$anuncio = $wpdb->get_row("SELECT count(*) as total FROM {$nome_tabela}");

	require_once('includes/tabela-log-total.php');

}