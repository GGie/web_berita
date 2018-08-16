<form method='POST' action='<?php echo base_url('berita/update_berita') ?>/<?php echo $id_berita; ?>'>
	
	
	
	<table>
	<tr>
		<td>
			Judul
		</td>
		<td>
			<input type='text' name='judul' value='<?php echo $judul ?>' size='70px'>
		</td>
	</tr>
	
	
	<tr>
		<td>
			Kategori
		</td>
		<td>
			<select name='kategori'>
				<option value='1' <?php if ( $kategori == 1 ) { echo "selected"; } ?>>Khazanah</option>
				<option value='2' <?php if ( $kategori == 2 ) { echo "selected"; } ?>>Internasional	</option>
				<option value='3' <?php if ( $kategori == 3 ) { echo "selected"; } ?>>Ekonomi</option>
				<option value='4' <?php if ( $kategori == 4 ) { echo "selected"; } ?>>Republikabola</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>
			Teks Berita
		</td>
		<td>
			<textarea rows="5" cols="150" type='text' name='isi' width='500px'><?php echo $isi ?></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td>
		</td>
		<td>
			<input type='submit' name='submit' value="Publish">
		</td>
	</tr>
	</table>
</form>