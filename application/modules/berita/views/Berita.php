<a href="<?php echo site_url() ?>/berita/posting">Posting Berita</a>
<div style='margin:30px'></div>


<?php foreach ( $berita->result() as $data ) { ?>
	<a href='<?php echo base_url('berita/posting_edit') ?>/<?php echo $data->id_berita; ?>'>Edit</a> - <a href='<?php echo base_url('berita/deletex') ?>/<?php echo $data->id_berita; ?>'>Hapus</a><br>
	<b style='font-size: 14px'><?php echo $data->judul . "<br>"; ?></b>
	Kategori : <b style='font-size: 14px'><?php echo $data->kat . "<br>"; ?></b>
	<?php echo substr($data->isi, 17, 30) . "More....<hr>"; ?>
<?php } ?>
