<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Manajemen Ruangan</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
	<script>
		var today = new Date();
		var lastDate = new Date(today.getFullYear() +1, 11, 31);
		//$('#field-mulai_kegiatan').hasDatepicker('destroy');
		/*$("#field-mulai_kegiatan").datepicker({
		  minDate: '0'
		});*/
		$(document).ready(function() {
  $('#field-mulai_kegiatan').datepicker({ 
    minDate: '0',
    yearRange: '-0:+1',
    maxDate: lastDate, //set the lastDate as maxDate
    hideIfNoPrevNext: true
  });
});
	</script>
	<style>
	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	}

	li {
	    float: left;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	    background-color: #111;
	}
	</style>
</head>
<body>
	<ul>
		<li><a href='<?php echo site_url('ruangan/kategori_ruangan_management')?>'>Kategori Ruangan</a></li>
		<li><a href='<?php echo site_url('ruangan/pengguna_management')?>'>Pengguna</a></li>
		<li><a href='<?php echo site_url('ruangan/ruangan_management')?>'>Ruangan</a></li>
		<li><a href='<?php echo site_url('ruangan/kegiatan_management')?>'>Kegiatan</a></li>
		<!--
		<a href='<?php echo site_url('ruangan/jadwal')?>'>Penggunaan Ruangan</a> |		 
		<a href='<?php echo site_url('ruangan/film_management')?>'>Films</a> |
		<a href='<?php echo site_url('ruangan/multigrids')?>'>Multigrid [BETA]</a>
		//-->
	</ul>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
		<?php 
		//	var_dump($this->db->last_query());
		?>
    </div>
</body>
</html>
