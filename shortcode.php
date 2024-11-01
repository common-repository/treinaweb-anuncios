<?php

add_shortcode('tw_anuncios', 'tw_anuncios_cb');

function tw_anuncios_cb() {

	anuncios::mostrar('post', 1);

}




















