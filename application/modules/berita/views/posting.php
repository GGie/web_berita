<form method='POST' action='<?php echo base_url('berita/save') ?>'>
	
	
	<table>
	<tr>
		<td>
			Judul
		</td>
		<td>
			<input type='text' name='judul' value='' size='70px'>
		</td>
	</tr>
	
	
	<tr>
		<td>
			Kategori
		</td>
		<td>
			<select name='kategori'>
				<option value='1'>Khazanah</option>
				<option value='2'>Internasional	</option>
				<option value='3'>Ekonomi</option>
				<option value='4'>Republikabola</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>
			Teks Berita
		</td>
		<td>
			<textarea rows="5" cols="150" type='text' name='isi' width='500px'></textarea>
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