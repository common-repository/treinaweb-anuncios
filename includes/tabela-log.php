<table>
	<?php foreach ($anuncios as $anuncio) : ?>
		<tr>
			<td><?= $anuncio->name_post ?>: </td>
			<td><strong><?= $anuncio->total_por_post ?></strong></td>
		</tr>
	<?php endforeach; ?>
</table>